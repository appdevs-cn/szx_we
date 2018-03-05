<?php
defined('YII_RUN') or exit('Access Denied');
/**
 * Created by IntelliJ IDEA.
 * User: luwei
 * Date: 2017/6/19
 * Time: 16:52
 */
$urlManager = Yii::$app->urlManager;
$this->title = '用户管理';
$this->params['active_nav_group'] = 4;
?>

<div class="main-nav" flex="cross:center dir:left box:first">
    <div>
        <nav class="breadcrumb rounded-0 mb-0" flex="cross:center">
            <a flex="cross:center" class="breadcrumb-item" href="<?= $urlManager->createUrl(['mch/store']) ?>">我的商城</a>
            <span flex="cross:center" class="breadcrumb-item active"><?= $this->title ?></span>
        </nav>
    </div>
    <div>
        <?= $this->render('/layouts/nav-right') ?>
    </div>
</div>

<div class="main-body p-3">
    <div class="dropdown float-left">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php if (isset($_GET['level'])): ?>
                <?php foreach ($level_list as $index => $value): ?>
                    <?php if ($value['level'] == $_GET['level']): ?>
                        <?= $value['name']; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                全部类型
            <?php endif; ?>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
             style="max-height: 200px;overflow-y: auto">
            <a class="dropdown-item" href="<?= $urlManager->createUrl(['mch/user/index']) ?>">全部会员</a>
            <?php foreach ($level_list as $index => $value): ?>
                <a class="dropdown-item"
                   href="<?= $urlManager->createUrl(array_merge(['mch/user/index'], $_GET, ['level' => $value['level'], 'page' => 1])) ?>"><?= $value['name'] ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="float-right mb-4">
        <form method="get">

            <?php $_s = ['keyword'] ?>
            <?php foreach ($_GET as $_gi => $_gv):if (in_array($_gi, $_s)) continue; ?>
                <input type="hidden" name="<?= $_gi ?>" value="<?= $_gv ?>">
            <?php endforeach; ?>

            <div class="input-group">
                <input class="form-control"
                       placeholder="微信昵称"
                       name="keyword"
                       autocomplete="off"
                       value="<?= isset($_GET['keyword']) ? trim($_GET['keyword']) : null ?>">
                    <span class="input-group-btn">
                    <button class="btn btn-primary">搜索</button>
                </span>
            </div>
        </form>
    </div>
    <table class="table table-bordered bg-white">
        <thead>
        <tr>
            <th>ID</th>
            <th>头像</th>
            <th>昵称</th>
            <th>加入时间</th>
            <th>身份</th>
            <th>订单数</th>
            <th>优惠券数量</th>
            <th>当前积分</th>
            <th>操作</th>
        </tr>
        </thead>
        <?php foreach ($list as $u): ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td>
                    <img src="<?= $u['avatar_url'] ?>" style="width: 34px;height: 34px;margin: -.6rem 0;">
                </td>
                <td><?= $u['nickname']; ?></td>
                <td><?= date('Y-m-d H:i:s', $u['addtime']) ?></td>
                <td>
                    <?= $u['l_name'] ? $u['l_name'] : '普通用户' ?>
                    <?= $u['is_clerk'] == 1 ? "（核销员）" : "" ?>
                </td>
                <td>
                    <a class="btn btn-sm btn-link"
                       href="<?= $urlManager->createUrl(['mch/order/index', 'user_id' => $u['id']]) ?>"><?= \app\models\User::getCount($u['id']) ?></a>
                </td>
                <td>
                    <a class="btn btn-sm btn-link"
                       href="<?= $urlManager->createUrl(['mch/user/coupon', 'user_id' => $u['id']]) ?>"><?= \app\models\User::getCouponcount($u['id']) ?></a>
                </td>
                <td>
                    <!--<a class="btn btn-sm btn-link"
                       href="<?/*= $urlManager->createUrl(['mch/user/coupon', 'user_id' => $u['id']]) */?>"><?/*= $u['integral']*/?></a>-->
                    <?= $u['integral'] ?>
                </td>
                <td>
                    <a class="btn btn-sm btn-primary"
                       href="<?= $urlManager->createUrl(['mch/user/edit', 'id' => $u['id']]) ?>">编辑</a>
                </td>
                <!--
                <td>
                    <a class="btn btn-sm btn-danger del" href="javascript:"
                       data-url="<?= $urlManager->createUrl(['mch/user/del', 'id' => $u['id']]) ?>"
                       data-content="是否删除？">删除</a>
                </td>
                -->
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="text-center">
        <?= \yii\widgets\LinkPager::widget(['pagination' => $pagination,]) ?>
        <div class="text-muted"><?= $row_count ?>条数据</div>
    </div>
</div>
<script>
    $(document).on('click', '.del', function () {
        var a = $(this);
        $.myConfirm({
            content: a.data('content'),
            confirm: function () {
                $.ajax({
                    url: a.data('url'),
                    type: 'get',
                    dataType: 'json',
                    success: function (res) {
                        if (res.code == 0) {
                            window.location.reload();
                        } else {
                            $.myAlert({
                                title: res.msg
                            });
                        }
                    }
                });
            }
        });
        return false;
    });
</script>
