<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php $this->beginBody() ?>
<?php $menu ?>
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="flag-icon flag-icon-<?= Yii::$app->language ?>"></i><span> <?= Yii::$app->language == 'uz' ? 'Uzbek' : "Русский" ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <a href="<?= Url::to(['', 'language' => Yii::$app->language == 'uz' ? 'ru': "uz"]) ?>" class="dropdown-item">
                        <!-- Message Start -->
                        <i class="flag-icon flag-icon-<?= Yii::$app->language == 'uz' ? 'ru' : "uz" ?>"></i> <?= Yii::$app->language != 'uz' ? 'Uzbek' : "Русский" ?>
                        <!-- Message End -->
                    </a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user-circle"></i>
                    <span> <?= Yii::t('backend', 'Profile') ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-md-right dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-user-edit mr-2"></i> <?= Yii::t('backend', 'Personal data')?>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= Url::to(['site/logout']) ?>" class="dropdown-item" data-method="POST">
                        <i class="fas fa-sign-out-alt mr-2"></i> <?= Yii::t('backend', 'Log out')?>
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/app-assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?= Yii::$app->user->identity->full_name ?></a>
                </div>
            </div>

            <?= $this->render('menu') ?>
        </div>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><?= $this->title ?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/"><?= Yii::t('backend', 'Home') ?></a></li>
                            <?php if (isset($this->params['breadcrumbs'])): ?>
                                <?php foreach ($this->params['breadcrumbs'] as $item): ?>
                                    <?php if (is_array($item)): ?>
                                        <li class="breadcrumb-item"><?= Html::a($item['label'], $item['url']) ?></li>
                                    <?php else: ?>
                                        <li class="breadcrumb-item active"
                                            aria-current="page"><?= $item ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <?= $content ?>
            </div>
        </div>
    </div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
