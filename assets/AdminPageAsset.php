<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminPageAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'AdminAssets/plugins/bootstrap/css/bootstrap.min.css',
        'AdminAssets/plugins/charts-c3/c3.min.css',
        'AdminAssets/css/main.css',
        'AdminAssets/css/theme1.css',

    ];
    public $js = [
        'AdminAssets/bundles/lib.vendor.bundle.js',
        'AdminAssets/bundles/apexcharts.bundle.js',
        'AdminAssets/bundles/counterup.bundle.js',
        'AdminAssets/bundles/knobjs.bundle.js',
        'AdminAssets/bundles/c3.bundle.js',
        'AdminAssets/js/core.js',
        'AdminAssets/js/page/project-index.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
       // 'yii\bootstrap5\BootstrapAsset'
    ];
}
