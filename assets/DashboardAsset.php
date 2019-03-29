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
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
        'pluginLTE/font-awesome/css/font-awesome.min.css',
        'pluginLTE/Ionicons/css/ionicons.min.css',
        'pluginLTE/morris.js/morris.css',
        'pluginLTE/jvectormap/jquery-jvectormap.css',
        'pluginLTE/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'pluginLTE/bootstrap-daterangepicker/daterangepicker.css',
        'pluginLTE/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
        'css/site.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'pluginLTE/jquery-ui/jquery-ui.min.js',
        'js/bootstrap.min.js',
        'js/pages/dashboard.js',
        'pluginLTE/jquery-slimscroll/jquery.slimscroll.min.js',
        'js/adminlte.min.js',
        'pluginLTE/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'pluginLTE/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'pluginLTE/bootstrap-daterangepicker/daterangepicker.js',
        'pluginLTE/moment/min/moment.min.js',
        'pluginLTE/jquery-knob/dist/jquery.knob.min.js',
        'pluginLTE/jvectormap/jquery-jvectormap-world-mill-en.js',
        'pluginLTE/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'pluginLTE/jquery-sparkline/dist/jquery.sparkline.min.js',
        'pluginLTE/morris.js/morris.min.js',
        'pluginLTE/raphael/raphael.min.js',
        'pluginLTE/fastclick/lib/fastclick.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
