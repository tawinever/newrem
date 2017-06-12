<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 25.06.2016
 * Time: 0:51
 */

namespace app\components\stickMenu;


use yii\web\AssetBundle;

class StickMenuFixedAsset extends AssetBundle
{
    public $js = ['stick_menu_spacer.js'];

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