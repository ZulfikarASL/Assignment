<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class MyAsset extends AssetBundle
{
    public $basePath = '@webroot/themes';
    public $baseUrl = '@web/themes';
    public $css = [
        'css/site.css',
        'css/pages/login/login-1.css',
        'css/style.bundle.css',
        'layout/header/menu/light.css',

        'css/pages/wizard/wizard-1.css',
        'css/themes/layout/aside/dark.css',
        'css/themes/layout/brand/dark.css',
        'layout/header/base/dark.css',
        'css/themes/layout/header/menu/dark.css',

    ];
    public $js = [
        'js/scripts.bundle.js',
        'js/pages/crud/datatables/advanced/column-rendering.js',
        'js/pages/crud/datatables/basic/basic.js',
        'js/pages/crud/datatables/extensions/buttons.js',
        'js/pages/crud/datatables/extensions/scroller.js',
        'frontend/web/theme/js/pages/crud/forms/widgets/autosize.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
