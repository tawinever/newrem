<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 02.07.2016
 * Time: 4:53
 */

namespace app\components\calculate;



use yii\web\AssetBundle;

class CalculateAsset extends AssetBundle
{
    public $js = ['calc.js'];

    public $depends = [
        'app\assets\LandingAsset',
    ];
    public $publishOptions = [
       //  'forceCopy'=>true,
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}