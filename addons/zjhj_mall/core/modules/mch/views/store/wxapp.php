<?php
defined('YII_RUN') or exit('Access Denied');
use yii\widgets\LinkPager;

$urlManager = Yii::$app->urlManager;
$this->title = '小程序发布';
$this->params['active_nav_group'] = 1;
?>

<div class="main-nav" flex="cross:center dir:left box:first">
    <div>
        <nav class="breadcrumb rounded-0 mb-0" flex="cross:center">
            <a class="breadcrumb-item" href="<?= $urlManager->createUrl(['mch/store/index']) ?>">我的商城</a>
            <span class="breadcrumb-item active"><?= $this->title ?></span>
        </nav>
    </div>
    <div>
        <?= $this->render('/layouts/nav-right') ?>
    </div>
</div>

<div class="main-body p-3">
    <div class="card">
        <div class="card-block">
            <p style="display: none">小程序发布流程请参考文档：<a href="http://cloud.zjhejiang.com/we7/mall/#help" target="_blank">http://cloud.zjhejiang.com/we7/mall/#help</a>
            </p>
            <?php if (!strstr(Yii::$app->request->hostInfo, 'https://')): ?>
                <p><b class="text-danger">请确认您的服务器是否支持https访问，如不支持，小程序将无法正常运行。</b></p>
            <?php endif; ?>
            <a class="btn btn-sm btn-primary download-wxapp" href="javascript:">打包并下载小程序</a>
            <hr>
            <a class="btn btn-sm btn-primary wxapp-qrcode mb-3" href="javascript:">获取小程序二维码</a>
            <div>
                <img src="" class="wxapp-qrcode-img" style="max-width: 320px">
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on("click", ".download-wxapp", function () {
        var btn = $(this);
        btn.btnLoading("正在处理");
        $.ajax({
            type: "post",
            dataType: "json",
            data: {
                _csrf: _csrf,
            },
            success: function (res) {
                btn.btnReset();
                if (res.code == 0) {
                    window.open(res.data);
                }
                if (res.code == 1) {
                }
            }
        });
    });
    $(document).on("click", ".wxapp-qrcode", function () {
        var btn = $(this);
        btn.btnLoading("正在处理");
        $.ajax({
            url: "<?=$urlManager->createUrl(['mch/store/wxapp-qrcode'])?>",
            type: "post",
            dataType: "json",
            data: {
                _csrf: _csrf,
            },
            success: function (res) {
                btn.btnReset();
                if (res.code == 0) {
                    $(".wxapp-qrcode-img").attr("src", res.data);
                }
                if (res.code == 1) {
                }
            }
        });
    });
</script>