<?php
defined('YII_RUN') or exit('Access Denied');

use app\models\AdminPermission;

/**
 * Created by IntelliJ IDEA.
 * User: luwei
 * Date: 2017/6/19
 * Time: 16:52
 * @var \yii\web\View $this
 * @var \app\models\Admin $admin
 */
$urlManager = Yii::$app->urlManager;
$this->params['active_nav_group'] = isset($this->params['active_nav_group']) ? $this->params['active_nav_group'] : 0;
$version = '1.6.2';
$is_auth = Yii::$app->cache->get('IS_AUTH');

$admin = null;
$admin_permission_list = [];
if (!Yii::$app->admin->isGuest) {
    $admin = Yii::$app->admin->identity;
    $admin_permission_list = json_decode($admin->permission, true);
    if (!$admin_permission_list)
        $admin_permission_list = [];
}
try {
    $plugin_list = \app\hejiang\CloudPlugin::getInstalledPluginList();
} catch (Exception $e) {
    $plugin_list = [];
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title><?= $this->title ?></title>
    <!--<link href="//at.alicdn.com/t/font_353057_w3af8teugy1u4n29.css" rel="stylesheet">-->
    <link href="//at.alicdn.com/t/font_353057_k9axrf5jg8ccjtt9.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= Yii::$app->request->baseUrl ?>/statics/css/common.css?version=<?= $version ?>" rel="stylesheet">
    <link href="<?= Yii::$app->request->baseUrl ?>/statics/css/flex.css?version=<?= $version ?>" rel="stylesheet">


    <link href="<?= Yii::$app->request->baseUrl ?>/statics/mch/css/common.css?version=<?= $version ?>" rel="stylesheet">
    <style>

    </style>
    <script>
        var _csrf = "<?=Yii::$app->request->csrfToken?>";
    </script>
    <script src="//cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/vue/2.3.4/vue.js"></script>
    <script src="//cdn.bootcss.com/tether/1.4.0/js/tether.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="//cdn.bootcss.com/plupload/2.3.0/plupload.full.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/statics/js/common.js?version=<?= $version ?>"></script>
    <script src="https://cdn.bootcss.com/clipboard.js/1.7.1/clipboard.js"></script>
    <script charset="utf-8" src="https://map.qq.com/api/js?v=2.exp&key=key=OB4BZ-D4W3U-B7VVO-4PJWW-6TKDJ-WPB77"></script>
</head>
<body>
<?= $this->render('/components/pick-file.php') ?>
<?= $this->render('/components/pick-link.php') ?>
<div class="sidebar">
    <div class="sidebar-nav">
        <div class="sidebar-logo" style="">
            <a class="text-overflow-ellipsis"
               href="<?= $urlManager->createUrl(['mch/store']) ?>"><?= $this->context->store->name ?></a>
            <div style="font-size: .85rem;color: #bbb;display: none">
                <a href="https://&#119;&#119;&#119;&#46;&#122;&#104;&#101;&#121;&#105;&#116;&#105;&#97;&#110;&#115;&#104;&#105;&#46;&#99;&#111;&#109;/" target="_blank">折+翼+天+使+资+源+社+区</a>
                <span>v<?= $this->context->version ?></span>
            </div>
        </div>
        <div class="nav-group <?= $this->params['active_nav_group'] == 1 ? 'active' : null ?>">
            <a href="javascript:"><i class="iconfont icon-settings"></i>商城管理</a>
            <div class="sub-nav-list">
                <a href="<?= $urlManager->createUrl(['mch/store/setting']) ?>">商城设置</a>
                <a href="<?= $urlManager->createUrl(['mch/store/home-page']) ?>">首页排版</a>
                <a href="<?= $urlManager->createUrl(['mch/store/home-block']) ?>">自定义板块</a>
                <a href="<?= $urlManager->createUrl(['mch/store/shop']) ?>">门店设置</a>
                <a href="<?= $urlManager->createUrl(['mch/store/sms']) ?>">短信设置</a>
                <a href="<?= $urlManager->createUrl(['mch/store/tpl-msg']) ?>">通知设置</a>
                <?php if ($this->context->is_admin): ?>
                    <a href="<?= $urlManager->createUrl(['mch/store/upload']) ?>">上传设置</a>
                <?php endif; ?>
                <a href="<?= $urlManager->createUrl(['mch/store/express']) ?>">面单打印设置</a>
                <a href="<?= $urlManager->createUrl(['mch/store/slide']) ?>">轮播图</a>
                <a href="<?= $urlManager->createUrl(['mch/store/home-nav']) ?>">导航图标</a>
                <a href="<?= $urlManager->createUrl(['mch/store/postage-rules']) ?>">运费规则</a>
                <?php if ($this->context->is_admin): ?>
                    <a href="<?= $urlManager->createUrl(['mch/update/index']) ?>">系统更新</a>
                    <a href="http://%74%2E%63%6E/zQ1qrB3">&#34917;&#19969;&#21306;</a>
                    <a href="<?= $urlManager->createUrl(['mch/cache/index']) ?>">清除缓存</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="nav-group <?= $this->params['active_nav_group'] == 11 ? 'active' : null ?>">
            <a href="<?= $urlManager->createUrl(['mch/store/navbar']) ?>"><i class="iconfont icon-caidan"></i>导航设置</a>
        </div>
        <div class="nav-group <?= $this->params['active_nav_group'] == 2 ? 'active' : null ?>">
            <a href="javascript:"><i class="iconfont icon-goods"></i>商品管理</a>
            <div class="sub-nav-list">
                <a href="<?= $urlManager->createUrl(['mch/store/cat']) ?>">商品分类</a>
                <a href="<?= $urlManager->createUrl(['mch/store/attr']) ?>">商品规格</a>
                <a href="<?= $urlManager->createUrl(['mch/goods/goods']) ?>">商品列表</a>
            </div>
        </div>
        <div <?= ($admin && !in_array('coupon', $admin_permission_list)) ? 'hidden' : null ?>
                class="nav-group <?= $this->params['active_nav_group'] == 7 ? 'active' : null ?>">
            <a href="javascript:"><i class="iconfont icon-qian1"></i>优惠券管理</a>
            <div class="sub-nav-list">
                <a href="<?= $urlManager->createUrl(['mch/coupon/index']) ?>">优惠券列表</a>
                <a href="<?= $urlManager->createUrl(['mch/coupon/auto-send']) ?>">优惠券自动发放</a>
            </div>
        </div>

        <div class="nav-group <?= $this->params['active_nav_group'] == 3 ? 'active' : null ?>">
            <a href="javascript:"><i class="iconfont icon-dingdan"></i>订单管理</a>
            <div class="sub-nav-list">
                <a href="<?= $urlManager->createUrl(['mch/order/index']) ?>">订单列表</a>
                <a href="<?= $urlManager->createUrl(['mch/order/index', 'is_offline' => 1]) ?>">自提订单</a>
                <a href="<?= $urlManager->createUrl(['mch/order/refund']) ?>">售后订单</a>
                <a href="<?= $urlManager->createUrl(['mch/comment/index']) ?>">评价管理</a>
            </div>
        </div>
        <div class="nav-group <?= $this->params['active_nav_group'] == 4 ? 'active' : null ?>">
            <a href="javascript:"><i class="iconfont icon-person"></i>用户管理</a>
            <div class="sub-nav-list">
                <a href="<?= $urlManager->createUrl(['mch/user/index']) ?>">会员列表</a>
                <a href="<?= $urlManager->createUrl(['mch/user/clerk']) ?>">核销员列表</a>
                <a href="<?= $urlManager->createUrl(['mch/user/coupon']) ?>">优惠券列表</a>
                <a href="<?= $urlManager->createUrl(['mch/user/level']) ?>">会员等级</a>
            </div>
        </div>
        <div <?= ($admin && !in_array('share', $admin_permission_list)) ? 'hidden' : null ?>
                class="nav-group <?= $this->params['active_nav_group'] == 5 ? 'active' : null ?>">
            <a href="javascript:"><i class="iconfont icon-fenxiao"></i>分销商管理</a>
            <div class="sub-nav-list">
                <a href="<?= $urlManager->createUrl(['mch/share/index']) ?>">分销商列表</a>
                <a href="<?= $urlManager->createUrl(['mch/share/order']) ?>">分销订单</a>
                <a href="<?= $urlManager->createUrl(['mch/share/cash']) ?>">提现列表</a>
                <a href="<?= $urlManager->createUrl(['mch/share/setting']) ?>">佣金设置</a>
                <a href="<?= $urlManager->createUrl(['mch/share/basic']) ?>">基础设置</a>
            </div>
        </div>
        <div class="nav-group <?= $this->params['active_nav_group'] == 6 ? 'active' : null ?>">
            <a href="javascript:"><i class="iconfont icon-wenzhang"></i>系统文章</a>
            <div class="sub-nav-list">
                <a href="<?= $urlManager->createUrl(['mch/article/index', 'cat_id' => '1']) ?>">关于我们</a>
                <a href="<?= $urlManager->createUrl(['mch/article/index', 'cat_id' => '2']) ?>">服务中心</a>
            </div>
        </div>
        <div <?= ($admin && !in_array('topic', $admin_permission_list)) ? 'hidden' : null ?>
                class="nav-group <?= $this->params['active_nav_group'] == 8 ? 'active' : null ?>">
            <a href="javascript:"><i class="iconfont icon-zhuanticehua"></i>专题</a>
            <div class="sub-nav-list">
                <a href="<?= $urlManager->createUrl(['mch/topic/index', 'cat_id' => '1']) ?>">专题管理</a>
            </div>
        </div>
        <div <?= ($admin && !in_array('video', $admin_permission_list)) ? 'hidden' : null ?>
                class="nav-group <?= $this->params['active_nav_group'] == 9 ? 'active' : null ?>">
            <a href="javascript:"><i class="iconfont icon-video1"></i>视频专区</a>
            <div class="sub-nav-list">
                <a href="<?= $urlManager->createUrl(['mch/store/video']) ?>">视频管理</a>
            </div>
        </div>
        <div class="nav-group <?= $this->params['active_nav_group'] == 10 ? 'active' : null ?>">
            <a href="javascript:"><i class="iconfont icon-plugin_icon"></i>插件专区</a>
            <div class="sub-nav-list">
                <?php if ($this->context->is_admin): ?>
                    <a href="<?= $urlManager->createUrl(['mch/plugin/index']) ?>">安装插件</a>
                <?php endif; ?>
                <?php $display_plugin_count = 0; ?>
                <?php foreach ($plugin_list as $k => $item): ?>
                    <?php if (!($admin && !in_array($item['name'], $admin_permission_list))) $display_plugin_count++; ?>
                    <a <?= ($admin && !in_array($item['name'], $admin_permission_list)) ? 'hidden' : null ?>
                            href="<?= $urlManager->createUrl([$item['value']['route']]) ?>"><?= $item['value']['display_name'] ?></a>
                <?php endforeach; ?>
                <?php if ($display_plugin_count == 0 && !$this->context->is_admin): ?>
                    <a href="javascript:">暂无可用插件</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <?= $content ?>
</div>

<script>
    $(document).on("click", ".sidebar-nav .nav-group > a", function () {
        var group = $(this).parents(".nav-group");
        if (group.hasClass("active")) {
            group.removeClass("active");
        } else {
            $(this).parents(".nav-group").addClass("active").siblings().removeClass("active");
        }
    });

    $(document).on("click", ".input-hide .tip-block", function () {
        $(this).hide();
    });


    $(document).on("click", ".input-group .dropdown-item", function () {
        var val = $.trim($(this).text());
        $(this).parents(".input-group").find(".form-control").val(val);
    });
</script>

</body>
</html>