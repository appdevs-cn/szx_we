<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 16:16
 */

namespace app\modules\mch\models;


use app\models\Coupon;
use app\models\User;
use app\models\UserCoupon;
use yii\data\Pagination;

class UserCouponForm extends Model
{
    public $store_id;

    public $user_id;
    public $status;
    public $page;
    public $limit;
    public $keyword;
    public function rules()
    {
        return [
            [['keyword',], 'trim'],
            [['status', 'page', 'limit', 'user_id'], 'integer'],
            [['status',], 'default', 'value' => -1],
            [['page',], 'default', 'value' => 1],
            //[['limit',], 'default', 'value' => 20],
        ];
    }
    public function search()
    {
        if(!$this->validate()){
            return $this->getModelError();
        }
        $query = UserCoupon::find()->alias('uc')->where([
            'uc.is_delete'=>0,
            'uc.store_id'=>$this->store_id
        ])->leftJoin(User::tableName().' u','u.id=uc.user_id')
        ->leftJoin(Coupon::tableName().' c','c.id=uc.coupon_id');
        if($this->status == 0){//未使用
            $query->andWhere(['uc.is_use'=>0,'uc.is_expire'=>0]);
        }
        if($this->status == 1){//已使用
            $query->andWhere(['uc.is_use'=>1,'uc.is_expire'=>0]);
        }
        if($this->status == 2){//已过期
            $query->andWhere(['uc.is_expire'=>1]);
        }

        if ($this->user_id) {//查找指定用户的
            $query->andWhere([
                'uc.user_id' => $this->user_id,
            ]);
        }
        if($this->keyword){
            $query->andWhere([
                'like','u.nickname',$this->keyword
            ]);
        }
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => $this->limit, 'page' => $this->page - 1]);
        $list = $query->limit($pagination->limit)->offset($pagination->offset)->orderBy('uc.addtime DESC')
            ->select([
                'u.nickname','uc.addtime uc_time','uc.is_use','uc.is_expire','uc.id uc_id','c.name',
                'c.sub_price','c.expire_type','c.min_price','c.discount_type','c.expire_day','c.begin_time',
                'c.end_time'
            ])->asArray()->all();
        return [
            'row_count' => $count,
            'page_count' => $pagination->pageCount,
            'pagination' => $pagination,
            'list' => $list,
        ];
    }

    public function getCountData()
    {
        if(!$this->validate()){
            return $this->getModelError();
        }
        $query = UserCoupon::find()->alias('uc')->where([
            'uc.is_delete'=>0,
            'uc.store_id'=>$this->store_id
        ])->leftJoin(User::tableName().' u','u.id=uc.user_id');

        if ($this->user_id) {//查找指定用户的
            $query->andWhere([
                'uc.user_id' => $this->user_id,
            ]);
        }
        if($this->keyword){
            $query->andWhere([
                'like','u.nickname',$this->keyword
            ]);
        }
        $data = $query->select([
            'sum(case when uc.is_use = 0 and uc.is_expire = 0 then 1 else 0 end) status_0',
            'sum(case when uc.is_use = 1 and uc.is_expire = 0 then 1 else 0 end) status_1',
            'sum(case when uc.is_expire = 1 then 1 else 0 end) status_2',
        ])->asArray()->one();
        return $data;
    }
}