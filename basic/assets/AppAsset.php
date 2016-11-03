<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/bootstrap-responsive.min.css',
        'css/font-awesome.min.css',
        'css/main.css',
        'css/sl-slide.css',
        'css/custom.css',

    ];
    public $js = [
        'js/vendor/modernizr-2.6.2-respond-1.1.0.min.js',
        //'js/vendor/jquery-1.9.1.min.js',
        'js/vendor/bootstrap.min.js',
        'js/main.js',
        'js/jquery.ba-cond.min.js',
        'js/jquery.slitslider.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
