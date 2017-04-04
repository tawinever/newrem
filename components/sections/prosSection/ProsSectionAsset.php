<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/30/17
 * Time: 2:13 AM
 */

namespace app\components\sections\prosSection;


use yii\web\AssetBundle;

class ProsSectionAsset extends AssetBundle
{
    public $js = ['pros.js'];

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