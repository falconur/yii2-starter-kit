<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'app-assets/plugins/fontawesome-free/css/all.min.css',
        'app-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'app-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'app-assets/plugins/jqvmap/jqvmap.min.css',
        'app-assets/dist/css/adminlte.min.css',
        'app-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'app-assets/plugins/daterangepicker/daterangepicker.css',
        'app-assets/plugins/summernote/summernote-bs4.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
        'app-assets/flag-icon-css/css/flag-icon.css'
    ];
    public $js = [
        'app-assets/plugins/sparklines/sparkline.js',
        'app-assets/plugins/jqvmap/jquery.vmap.min.js',
        'app-assets/plugins/jqvmap/maps/jquery.vmap.usa.js',
        'app-assets/plugins/jquery-knob/jquery.knob.min.js',
        'app-assets/plugins/moment/moment.min.js',
        'app-assets/plugins/daterangepicker/daterangepicker.js',
        'app-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'app-assets/plugins/summernote/summernote-bs4.min.js',
        'app-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'app-assets/dist/js/adminlte.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset'
    ];
}
