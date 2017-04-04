<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/30/17
 * Time: 3:19 AM
 */

namespace app\components\sections\pros2Section;


use yii\web\AssetBundle;

class Pros2SectionAsset extends AssetBundle
{
    public $js = ['pros2.js'];

    public $css = [

    ];

    public $depends = [
        'app\assets\BXSliderAsset',
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