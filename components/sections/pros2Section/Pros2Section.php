<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:04
 */

namespace app\components\sections\pros2Section;


use app\assets\BXSliderAsset;
use app\components\parents\PageWidget;
use app\models\Copyright;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class Pros2Section extends PageWidget
{
    public function run()
    {
        parent::run();
        $this->registerClientScript();

//        if(\Yii::getAlias('@device') != 'mobile')
//        {
//            $models = Copyright::find()->where(['page' => $this->page, 'section' => 'pros2Section'])->all();
//            $mapModels = ArrayHelper::index($models,'position');
//            if($this->page == "display"){
//                return $this->render('display', ['copy' => $mapModels]);
//            }
//            if($this->page == "express"){
//                return $this->render('express', ['copy' => $mapModels]);
//            }
//            if($this->page== "macbook" || $this->page== "notebook"){
//                return $this->render('macbook', ['copy' => $mapModels]);
//            }
//            return $this->render('view',['copy' => $mapModels]);
//        }
        return $this->render('view',['simpleData' => $this->simpleData]);
    }

    protected function registerClientScript()
    {
        $view = $this->getView();
        Pros2SectionAsset::register($view);
    }

}