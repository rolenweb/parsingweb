<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    
</head>
<body>
<?php $this->beginBody() ?>

<!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
                <?= Html::a('',['site/index'],['class' => 'pull-left','id' => 'logo']) ?>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li <?= (Yii::$app->request->url === '/') ? 'class="active"' : '' ?>><?= Html::a('Главная',['site/index']) ?></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Услуги <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li <?= (Yii::$app->request->url === '/stranic-sajta') ? 'class="active"' : '' ?>>
                                    <?= Html::a('Парсинг страниц сайта',['site/stranic-sajta'],['title' => 'Парсинг страниц сайта']) ?>
                                </li>
                                <li <?= (Yii::$app->request->url === '/tovarov-sajta') ? 'class="active"' : '' ?>>
                                    <?= Html::a('Парсинг товаров сайта',['site/tovarov-sajta'],['title' => 'Парсинг товаров сайта']) ?>
                                </li>
                                <li <?= (Yii::$app->request->url === '/kartinok-s-sajta') ? 'class="active"' : '' ?>>
                                    <?= Html::a('Парсинг картинок с сайта',['site/kartinok-s-sajta'],['title' => 'Парсинг картинок с сайта']) ?>
                                </li>
                                <li <?= (Yii::$app->request->url === '/zashchishchennyh-sajtov') ? 'class="active"' : '' ?>>
                                    <?= Html::a('Парсинг защищенных сайтов',['site/zashchishchennyh-sajtov'],['title' => 'Парсинг защищенных сайтов']) ?>
                                </li>
                                <li <?= (Yii::$app->request->url === '/novostnyh-sajtov') ? 'class="active"' : '' ?>>
                                    <?= Html::a('Парсинг новостных сайтов',['site/novostnyh-sajtov'],['title' => 'Парсинг новостных сайтов']) ?>
                                
                                </li>
                                <li <?= (Yii::$app->request->url === '/sajtov-nedvizhimosti') ? 'class="active"' : '' ?>>
                                    
                                    <?= Html::a('Парсинг сайтов недвижимости',['site/sajtov-nedvizhimosti'],['title' => 'Парсинг сайтов недвижимости']) ?>
                                </li>
                                <li <?= (Yii::$app->request->url === '/bukmekerskih-sajtov') ? 'class="active"' : '' ?>>
                                    <?= Html::a('Парсинг букмекерских сайтов',['site/bukmekerskih-sajtov'],['title' => 'Парсинг букмекерских сайтов']) ?>
                                </li>
                                <li <?= (Yii::$app->request->url === '/sajtov-znakomstv') ? 'class="active"' : '' ?>>
                                    <?= Html::a('Парсинг сайтов знакомств',['site/sajtov-znakomstv'],['title' => 'Парсинг сайтов знакомств']) ?>
                                </li>
                                
                                
                                
                            </ul>
                        </li>
                        <li <?= (Yii::$app->request->url === '/order') ? 'class="active"' : '' ?>>
                            <?= Html::a('Заказать',['site/order'],['title' => 'Заказать парсинг сайта']) ?>
                        </li>
                        <?php
                            echo Yii::$app->user->isGuest ? '' : Html::tag('li',Html::a(Html::tag('i','',['class' => 'icon-lock']),'#loginForm',['data-toggle' => 'modal']),['class' => 'login']); 
                        ?>
                        
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->
<?= $content ?>

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <!--/Copyright-->
            <div class="span5">
                <div class="span3">
                    <i class="icon-skype icon-small"></i>
                         rolenweb
                </div>
                <div class="span4">
                    <i class="icon-phone icon-small"></i>
                         +7-904-796-7406
                </div>
                
            </div>
            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <div class="span6 cp text-right">
                &copy; <?= date("Y") ?>. All Rights Reserved.
            </div>
            

            
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<?php if (Yii::$app->user->isGuest) {
    
}else{
?>
<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->
<?php    
}

?>


<?php $this->endBody() ?>
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
</body>
</html>
<?php $this->endPage() ?>
