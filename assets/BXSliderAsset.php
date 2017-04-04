<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/30/17
 * Time: 3:12 AM
 */

namespace app\assets;


use yii\web\AssetBundle;

class BXSliderAsset extends AssetBundle
{
    public $basePath = '@webroot/slider';
    public $baseUrl = '@web/slider';
    public $css = [
        'jquery.bxslider.min.css',
        'jquery.fancybox.min.css',
    ];
    public $js = [
        'jquery.bxslider.min.js',
        'jquery.fancybox.min.js',
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

    }
}