<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\assets\FontAwesomeAsset;
use common\widgets\Alert;

AppAsset::register($this);
FontAwesomeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!-- 开始 TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+400-8208820</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="/account/index.html">我的帐号</a></li>
                        <li><a href="/order/index.html">我的订单</a></li>
                        <li><a href="/account/login">登录</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>
    </div>
    <!-- 结束 TOP BAR -->

    <!-- 开始 HEADER -->
    <div role="navigation" class="navbar header no-margin">
        <div class="container">
            <div class="navbar-header">
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <button data-target="#demo" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <a href="/" class="navbar-brand"><img src="img/logo_red.png" alt="Metronic Shop UI"></a><!-- LOGO -->
            </div>
            <!-- BEGIN CART -->
            <div class="cart-block">
                <div class="cart-info">
                    <a href="/cart/index.html" class="cart-info-count">0 个商品</a>
                    <!--   <?php /*if ($this->cart['amount']):*/ ?>
                        <a href="/cart/index.html" class="cart-info-value">￥0.00</a>
                    <?php /*endif;*/ ?>-->
                </div>
                <i class="fa fa-shopping-cart"></i>
                <!-- BEGIN CART CONTENT -->
                <div class="cart-content-wrapper">
                </div>
                <!-- END CART CONTENT -->
            </div>
            <!-- END CART -->
            <!-- BEGIN NAVIGATION -->
            <div class="collapse navbar-collapse mega-menu" id="demo">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle"  data-delay="0" data-close-others="false" data-toggle="dropdown"
                           data-target="product-list.html" href="product-list.html" data-hover="dropdown">
                            全部分类
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <!-- BEGIN DROPDOWN MENU -->
                        <ul class="dropdown-menu" aria-labelledby="mega-menu">
                            <li>
                                <div class="nav-content">
                                    0000
                                </div>
                            </li>
                            <li>
                                <div class="nav-content">
                                    1111
                                </div>
                            </li>
                            <li>
                                <div class="nav-content">
                                    2222
                                </div>
                            </li>
                        </ul>
                        <!-- END DROPDOWN MENU -->
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown"  data-hover="dropdown" data-delay="0" data-close-others="false"
                           data-target="product-list.html" href="product-list.html">
                            促销商品
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <!-- BEGIN DROPDOWN MENU -->
                        <ul class="dropdown-menu" aria-labelledby="mega-menu-catalogue">

                            <li>
                                <div class="nav-content">
                                    1111
                                </div>
                            </li>
                            <li>
                                <div class="nav-content">
                                    2222
                                </div>
                            </li>
                            <li>
                                <div class="nav-content">
                                    3333
                                </div>
                            </li>

                        </ul>
                        <!-- END DROPDOWN MENU -->
                    </li>
                    <li><a href="/category.html?cid=1">进口食品</a></li>
                    <li><a href="/category.html?cid=11">进口酒类</a></li>
                    <li><a href="/page/about.html">关于商城</a></li>
                    <!-- BEGIN TOP SEARCH -->
                    <li class="menu-search">
                        <span class="sep"></span>
                        <i class="fa fa-search search-btn"></i>
                        <div class="search-box">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" placeholder="搜索关键字" class="form-control">
                                    <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">搜索</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- END TOP SEARCH -->
                </ul>
            </div>
            <!-- END NAVIGATION -->
        </div>
    </div>
    <!-- 结束 HEADER -->
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
