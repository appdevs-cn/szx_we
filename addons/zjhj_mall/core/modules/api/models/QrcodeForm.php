<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/11
 * Time: 16:07
 */

namespace app\modules\api\models;

use app\models\UploadConfig;
use app\models\UploadForm;
use luweiss\wechat\Wechat;

/**
 * @property Wechat $wechat 小程序的
 */
class QrcodeForm extends Model
{
//    public $order_no;
    public $data;//['scene'=>"",'page'=>'','width'=>100]
    public $store;
    public $wechat;


    public function getQrcode()
    {
        $this->wechat = $this->getWechat();
        $this->store = isset(\Yii::$app->controller->store) ? \Yii::$app->controller->store : null;
        //获取微信小程序码
        $access_token = $this->wechat->getAccessToken();
        $api = "https://api.weixin.qq.com/wxa/getwxacodeunlimit?access_token={$access_token}";
        $data = json_encode($this->data, JSON_UNESCAPED_UNICODE);
        $this->wechat->curl->post($api, $data);
        if ($this->wechat->curl->error) {

            return [
                'code' => 1,
                'msg' => '小程序码获取失败',
            ];
        }
        $res = $this->wechat->curl->response;
        //保存到本地
        $saveRoot = \Yii::$app->basePath . '/web/';
        $saveDir = 'uploads/linshi/';
        if (!is_dir($saveRoot . $saveDir)) {
            mkdir($saveRoot . $saveDir);
            file_put_contents($saveRoot . $saveDir . '.gitignore', "*\r\n!.gitignore");
        }
        $webRoot = \Yii::$app->request->baseUrl . '/';
        $saveName = md5(uniqid()) . '.jpeg';
        file_put_contents($saveRoot . $saveDir . $saveName, $res);
        $form = new UploadForm();
        $upload_config = UploadConfig::findOne(['store_id' => $this->store->id]);
        $form->upload_config = $upload_config;
        $form->store = $this->store;
        return $form->saveQrcode($saveRoot . $saveDir . $saveName, $saveName);
    }
}