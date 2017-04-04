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
class LandingAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style6.css',
        'css/font-awesome/css/font-awesome.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
    public $publishOptions = [
         'forceCopy'=>true,
    ];

    public function init()
    {
        parent::init();
        if (\Yii::getAlias('@device') == 'mobile') {
            $this->css = ['css/mobile3.css'];
        }
    }
}
