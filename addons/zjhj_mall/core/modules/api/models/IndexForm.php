<?php
/**
 * Created by IntelliJ IDEA.
 * User: luwei
 * Date: 2017/7/5
 * Time: 16:00
 */

namespace app\modules\api\models;


use app\models\Banner;
use app\models\Cat;
use app\models\Coupon;
use app\models\Goods;
use app\models\GoodsPic;
use app\models\HomeBlock;
use app\models\HomeNav;
use app\models\Option;
use app\models\Store;
use app\models\Topic;
use app\models\UserCoupon;

class IndexForm extends Model
{
    public $store_id;

    public function search()
    {
        $store = Store::findOne($this->store_id);
        if (!$store)
            return [
                'code' => 1,
                'msg' => 'Store不存在',
            ];

        $banner_list = Banner::find()->where([
            'is_delete' => 0,
            'store_id' => $this->store_id,
        ])->orderBy('sort ASC')->asArray()->all();
        foreach ($banner_list as $i => $banner) {
            $banner_list[$i]['open_type'] = 'navigate';
        }

        $nav_icon_list = HomeNav::find()->where([
            'is_delete' => 0,
            'store_id' => $this->store_id,
        ])->orderBy('sort ASC,addtime DESC')->select('name,pic_url,url,name,open_type')->asArray()->all();

        $cat_list = Cat::find()->where([
            'is_delete' => 0,
            'parent_id' => 0,
            'store_id' => $this->store_id,
        ])->orderBy('sort ASC')->asArray()->all();
        foreach ($cat_list as $i => $cat) {
            $cat_list[$i]['page_url'] = '/pages/list/list?cat_id=' . $cat['id'];
            $cat_list[$i]['open_type'] = 'navigate';
            $cat_list[$i]['cat_pic'] = $cat['pic_url'];
            $goods_list_form = new GoodsListForm();
            $goods_list_form->store_id = $this->store_id;
            $goods_list_form->cat_id = $cat['id'];
            $goods_list_form->limit = $store->cat_goods_count;
            $goods_list_form_res = $goods_list_form->search();
            $goods_list = $goods_list_form_res['code'] == 0 ? $goods_list_form_res['data']['list'] : [];
            $cat_list[$i]['goods_list'] = $goods_list;
        }

        $block_list = HomeBlock::find()->where(['store_id' => $this->store_id, 'is_delete' => 0])->all();
        $new_block_list = [];
        foreach ($block_list as $item) {
            $new_block_list[] = [
                'id' => $item->id,
                'name' => $item->name,
                'data' => json_decode($item->data, true),
            ];
        }
        $user_id = \Yii::$app->user->identity->id;
        $coupon_form = new CouponListForm();
        $coupon_form->store_id = $this->store_id;
        $coupon_form->user_id = $user_id;
        $coupon_list = $coupon_form->getList();

        $topic_list = Topic::find()->where(['store_id' => $this->store_id, 'is_delete' => 0])->orderBy('sort ASC,addtime DESC')->limit(6)->select('id,title')->asArray()->all();

        return [
            'code' => 0,
            'msg' => 'success',
            'data' => [
                'module_list' => $this->getModuleList($store),
                'store' => [
                    'id' => $store->id,
                    'name' => $store->name,
                    'is_coupon' => $store->is_coupon,
                    'show_customer_service' => $store->show_customer_service,
                    'service'=>Option::get('service',$this->store_id,'admin','/images/icon-service.png'),
                    'copyright' => $store->copyright,
                    'copyright_pic_url' => $store->copyright_pic_url,
                    'copyright_url' => $store->copyright_url,
                    'contact_tel' => $store->contact_tel,
                    'cat_style' => $store->cat_style,
                    'address' => $store->address,
                    'is_offline' => $store->is_offline,
                ],
                'banner_list' => $banner_list,
                'nav_icon_list' => $nav_icon_list,
                'cat_goods_cols' => $store->cat_goods_cols,
                'cat_list' => $cat_list,
                'block_list' => $new_block_list,
                'coupon_list' => $coupon_list,
                'topic_list' => $topic_list,
                'nav_count'=>$store->nav_count
            ],
        ];
    }

    private function getBlockList()
    {

    }

    /**
     * @param Store $store
     */
    private function getModuleList($store)
    {
        $list = json_decode($store->home_page_module, true);
        if (!$list) {
            $list = [
                [
                    'name' => 'banner',
                ],
                [
                    'name' => 'search',
                ],
                [
                    'name' => 'nav',
                ],
                [
                    'name' => 'topic',
                ],
                [
                    'name' => 'coupon',
                ],
                [
                    'name' => 'cat',
                ],
            ];
        } else {
            $new_list = [];
            foreach ($list as $item) {
                if (stripos($item['name'], 'block-') !== false) {
                    $names = explode('-', $item['name']);
                    $new_list[] = [
                        'name' => $names[0],
                        'block_id' => $names[1],
                    ];
                } elseif (stripos($item['name'], 'single_cat-') !== false) {
                    $names = explode('-', $item['name']);
                    $new_list[] = [
                        'name' => $names[0],
                        'cat_id' => $names[1],
                    ];
                } else {
                    $new_list[] = $item;
                }
            }
            $list = $new_list;
        }
        return $list;
    }
}