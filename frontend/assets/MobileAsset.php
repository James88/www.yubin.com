<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MobileAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'statics/mobile/css/iconfont.css',
        'statics/mobile/css/common.css',
        'statics/mobile/css/style.css',
    ];
    public $js = [
        //'statics/js/common.js',
    ];
    public $depends = [
        'frontend\assets\JqueryAsset',
    ];
}