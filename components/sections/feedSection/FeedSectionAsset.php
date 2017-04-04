<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/28/17
 * Time: 3:47 PM
 */

namespace app\components\sections\feedSection;


use yii\web\AssetBundle;

class FeedSectionAsset extends AssetBundle
{
    public $js = ['feed_section.js'];

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