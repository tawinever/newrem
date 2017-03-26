<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 25.06.2016
 * Time: 2:48
 */

namespace app\components\orderPopup;


use yii\web\AssetBundle;

class OrderPopupAsset extends AssetBundle
{
    public $js = ['order_popup.js'];

    public $css = ['popup.css'];
    public $depends = [
        'app\assets\LandingAsset',
    ];
    public $publishOptions = [
        // 'forceCopy'=>true,
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}