<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

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
        //'css/site.css',
        'css/extra.css',
        'metronic/global/plugins/font-awesome/css/font-awesome.min.css',
        'metronic/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'metronic/global/plugins/bootstrap/css/bootstrap.min.css',
        'metronic/global/plugins/uniform/css/uniform.default.css',
        'metronic/global/plugins/select2/select2.css',
        'metronic/admin/pages/css/login3.css',
        'metronic/global/css/components-md.css',
        'metronic/global/css/plugins-md.css',
        'metronic/admin/layout3/css/layout.css',
        'metronic/admin/layout3/css/themes/default.css',
        'metronic/admin/layout3/css/custom.css',
    ];
    public $js = [
        'js/modal.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
