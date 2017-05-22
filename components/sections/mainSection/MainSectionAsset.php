<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:04
 */

namespace app\components\sections\mainSection;


use yii\web\AssetBundle;

class MainSectionAsset extends AssetBundle
{
    public $js = [
        'main_section.js',
    ];
    public $depends = [
        'app\assets\LandingAsset',
    ];
    public $publishOptions = [
        'forceCopy'=>true,
    ];
    
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}