<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/14
 * Time: 17:46
 */

namespace app\behaviors;


use app\models\Level;
use app\models\Order;
use app\models\OrderDetail;
use app\models\OrderRefund;
use app\models\Setting;
use app\models\Store;
use app\models\User;
use yii\base\Behavior;
use yii\web\Controller;

class OrderBehavior extends Behavior
{
    public $store_id;

    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'beforeAction',
        ];
    }

    public function beforeAction($e)
    {
        $this->store_id = isset(\Yii::$app->controller->store) ? \Yii::$app->controller->store->id : 0;
        if (!$this->store_id) {
            return true;
        }

        $store = Store::findOne(['id' => $this->store_id]);
        $share_setting = Setting::findOne(['store_id' => $this->store_id]);
        $time = time();
        if ($store->over_day != 0) {
            $over_day = $time - ($store->over_day * 3600);
            $count_p = Order::updateAll([
                'is_cancel' => 1,
            ], 'is_pay=0 and addtime<=:addtime and store_id=:store_id',
                [':addtime' => $over_day, ':store_id' => $this->store_id]);
        }
        $delivery_time = $time - ($store->delivery_time * 86400);
        $sale_time = $time - ($store->after_sale_time * 86400);

//        $user_id_arr = Order::find()->select('user_id')->where(['is_delete' => 0, 'store_id' => $this->store_id, 'is_confirm' => 0, 'is_send' => 0])
//            ->andWhere(['<=', 'send_time', $delivery_time])->groupBy('user_id')->asArray()->all();

        $count = Order::updateAll([
            'is_confirm' => 1, 'confirm_time' => time()],
            'is_delete=0 and is_send=1 and send_time <= :send_time and store_id=:store_id and is_confirm=0',
            [':send_time' => $delivery_time, ':store_id' => $this->store_id]);


        if ($share_setting->level == 0) {
            return true;
        }
        $order_list = Order::find()->alias('o')
            ->where([
                'and',
                ['o.is_delete' => 0, 'o.is_send' => 1, 'o.is_price' => 0, 'o.is_confirm' => 1, 'o.store_id' => $this->store_id],
                ['<=', 'o.confirm_time', $sale_time],
                ['>', 'o.parent_id', 0]
            ])
            ->leftJoin(OrderRefund::tableName() . ' r', "r.order_id = o.id and r.is_delete = 0")
            ->select(['o.*'])->groupBy('o.id')
            ->andWhere([
                'or',
                'isnull(r.id)',
                ['r.type' => 2],
                ['in', 'r.status', [2, 3]]
            ])
            ->offset(0)->limit(20)->asArray()->all();
        /* @var $order_list Order[] */
        $price_id = array();
        $user_id_arr = array();
        foreach ($order_list as $index => $value) {
            $parent_id = $value['parent_id'];

//            $percent[0] = $share_setting->first;
//            $percent[1] = $share_setting->second;
//            $percent[2] = $share_setting->third;
//            foreach($percent as $i=>$v){
//                if($i >= 3){
//                    break;
//                }
//                if($i+1 > $share_setting->level){
//                    break;
//                }
//                if($parent_id == 0)
//                    break;
//                $res = self::shareMoney($parent_id,$v,$value['pay_price']);
//                if($res['code'] == 1)
//                    break;
//                $parent_id = $res['parent_id'];
//            }
            $money[0] = $value['first_price'];
            $money[1] = $value['second_price'];
            $money[2] = $value['third_price'];
            foreach ($money as $i => $v) {
                if ($i >= 3) {
                    break;
                }
                if ($i + 1 > $share_setting->level) {
                    break;
                }
                if ($parent_id == 0)
                    break;
                $res = self::money($parent_id, $v);
                if ($res['code'] == 1)
                    break;
                $parent_id = $res['parent_id'];
            }
            $price_id[] = $value['id'];
        }
        Order::updateAll(['is_price' => 1], ['in', 'id', $price_id]);
        $user_id_arr = Order::find()->select('user_id')->where(['is_delete' => 0, 'store_id' => $this->store_id, 'is_confirm' => 1, 'is_send' => 1])
            ->andWhere(['<=', 'confirm_time', $sale_time])->groupBy('user_id')->asArray()->all();

        foreach ($user_id_arr as $index => $value) {
            $user = User::findOne(['id' => $value, 'store_id' => $this->store_id]);
            $order_money = Order::find()->where(['store_id' => $this->store_id, 'user_id' => $user->id, 'is_delete' => 0])
                ->andWhere(['is_pay' => 1, 'is_confirm' => 1,'is_send'=>1])->andWhere(['<=', 'confirm_time', $sale_time])->select([
                    'sum(pay_price)'
                ])->scalar();
            if(!$order_money){
                $order_money = 0;
            }
            $next_level = Level::find()->where(['store_id' => $this->store_id, 'is_delete' => 0,'status'=>1])
                ->andWhere(['<=', 'money', $order_money])->orderBy(['level' => SORT_DESC])->asArray()->one();
            if ($user->level < $next_level['level']) {
                $user->level = $next_level['level'];
                $user->save();
            }
        }

        // 发放积分
        $giveOrder = Order::find()->where(['store_id' => $this->store_id,'is_delete' => 0])
                ->andWhere(['is_pay'=>1,'is_confirm' => 1,'is_send' => 1,'give_integral'=>0])
                ->andWhere(['<=','confirm_time',$sale_time])
                ->asArray()
                ->all();
        foreach ($giveOrder AS $give){
            $integral = OrderDetail::find()
                ->andWhere(['order_id'=>$give['id'],'is_delete'=>0])
                ->select([
                    'sum(integral)'
                ])->scalar();
            $giveUser = User::findOne(['id' => $give['user_id']]);
            $giveUser->integral += $integral;
            $giveUser->total_integral += $integral;
            $giveUser->save();
            $orderInfo = Order::findOne(['id'=>$give['id']]);
            $orderInfo->give_integral = 1;
            $orderInfo->save();
        }
    }

    public static function money($parent_id, $money)
    {
        if ($parent_id == 0) {
            return ['code' => 1, 'parent_id' => 0];
        }
        $parent = User::findOne(['id' => $parent_id]);
        if (!$parent) {
            return ['code' => 1, 'parent_id' => 0];
        }
        $parent->total_price += $money;
        $parent->price += $money;
        if ($parent->save()) {
            return [
                'code' => 0,
                'parent_id' => $parent->parent_id
            ];
        } else {
            return [
                'code' => 1,
                'parent_id' => 0
            ];
        }
    }


    public static function shareMoney($parent_id, $percent, $price)
    {
        if ($parent_id == 0) {
            return ['code' => 1, 'parent_id' => 0];
        }
        $parent = User::findOne(['id' => $parent_id]);
        if (!$parent) {
            return ['code' => 1, 'parent_id' => 0];
        }
        $parent->total_price += ($price * $percent / 100);
        $parent->price += ($price * $percent / 100);

        if ($parent->save()) {
            return [
                'code' => 0,
                'parent_id' => $parent->parent_id
            ];
        } else {
            return [
                'code' => 1,
                'parent_id' => 0
            ];
        }
    }
}