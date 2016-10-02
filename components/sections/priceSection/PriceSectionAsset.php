<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 10.07.2016
 * Time: 19:12
 */

namespace app\components\sections\priceSection;


use kartik\base\AssetBundle;

class PriceSectionAsset extends AssetBundle
{
    public $js = [
        'price_section.js',
    ];
    public $depends = [
        'app\assets\LandingAsset',
    ];
    public $publishOptions = [
//         'forceCopy'=>true,
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
        if(\Yii::getAlias('@device') == 'mobile')
        {
            $this->js = [];
        }
    }
}