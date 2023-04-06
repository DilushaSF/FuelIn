<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/bootstrap.min.css',
        // 'css/font-awesome.min.css',
        // 'css/ionicons.min.css',
        // 'css/AdminLTE.min.css',
        // 'css/_all-skins.min.css',
        // 'css/morris.css',
        // 'css/jquery-jvectormap.css',
        // 'css/bootstrap-datepicker.min.css',
        // 'css/daterangepicker.css',
        // 'css/bootstrap3-wysihtml5.min.css',
        // 'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
