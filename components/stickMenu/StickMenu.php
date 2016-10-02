<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 24.06.2016
 * Time: 23:38
 */

namespace app\components\stickMenu;


use yii\base\Widget;

class StickMenu extends Widget
{
    public $fixed = false;
    public function run()
    {
        parent::run();

        $this->registerClientScript($this->fixed);

        if(\Yii::getAlias('@device') == 'mobile')
            return $this->render('mobile',['fixed' => $this->fixed]);
        return $this->render('view',['fixed' => $this->fixed]);
    }

    protected function registerClientScript($fixed)
    {
        $view = $this->getView();
        if($fixed)
            StickMenuFixedAsset::register($view);
        else
            StickMenuAsset::register($view);
    }
}