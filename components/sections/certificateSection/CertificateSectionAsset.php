<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/30/17
 * Time: 4:36 PM
 */

namespace app\components\sections\certificateSection;




use yii\web\AssetBundle;

class CertificateSectionAsset extends AssetBundle
{
    public $js = ['cert.js'];

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