<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/bootstrap.min.css',
        'public/css/font-awesome.min.css',
        'public/css/animate.min.css',
        'public/css/owl.carousel.css',
        'public/owl.theme.css',
        'public/owl.transitions.css',
        'public/css/style.css',
        'public/css/responsive.css',
    ];
    public $js = [
        'public/js/jquery-1.11.3.min.js',
        'public/js/bootstrap.min.js',
        'public/js/owl.carousel.js',
        'public/js/jquery.stickit.min.js',
        'public/js/menu.js',
        'public/js/scripts.js'
    ];
    public $depends = [

    ];
}

