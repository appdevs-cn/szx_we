<?php
defined('YII_RUN') or exit('Access Denied');

use yii\widgets\LinkPager;

$urlManager = Yii::$app->urlManager;
$this->title = '系统更新';
$this->params['active_nav_group'] = 1;
?>
<style>
    .alert {
        border-radius: .15rem;
    }

    .alert-primary {
        color: #004085;
        background-color: #cce5ff;
        border-color: #b8daff;
    }

    .alert-secondary {
        color: #464a4e;
        background-color: #e7e8ea;
        border-color: #dddfe2;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .alert-dark {
        color: #1b1e21;
        background-color: #d6d8d9;
        border-color: #c6c8ca;
    }
</style>
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
    <div style="max-width: 60rem">
        <div class="alert alert-dark p-3" role="alert">当前系统版本：<b>v1.9.0.2</b></div>

        
            <div class="alert alert-secondary p-3"><font color="red">(<script>document.write(unescape('\u672c\u6e90\u7801\u7531\u6298\u7ffc\u5929\u4f7f\u0077\u0077\u0077\u002e\u007a\u0068\u0065\u0079\u0069\u0074\u0069\u0061\u006e\u0073\u0068\u0069\u002e\u0063\u006f\u006d\u63d0\u4f9b'));</script>)</font></a>
</div>
        
    </div>
</div>

