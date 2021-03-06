<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:04
 */

namespace app\components\sections\prosSection;


use app\components\parents\PageWidget;

class ProsSection extends PageWidget
{
    public function run()
    {
        parent::run();
        $this->registerClientScript();
        return $this->render('view',['simpleData' => $this->simpleData]);
//        $models = Copyright::find()->where(['page' => $this->page, 'section' => 'prosSection'])->all();
//        $mapModels = ArrayHelper::index($models,'position');
//        if(\Yii::getAlias('@device') != 'mobile')
//        {
//            if($this->page== "display"){
//                return $this->render('display', ['copy' => $mapModels]);
//            }
//            if($this->page== "express"){
//                return $this->render('express', ['copy' => $mapModels]);
//            }
//            if($this->page== "notebook" || $this->page== "macbook"){
//                return $this->render('notebook', ['copy' => $mapModels]);
//            }
//            return $this->render('view',['copy' => $mapModels]);
//        }
//        if($this->page== "express"){
//            return $this->render('mobile_express', ['copy' => $mapModels]);
//        }
//        if($this->page== "notebook" || $this->page== "macbook"){
//            return $this->render('mobile_notebook', ['copy' => $mapModels]);
//        }
//        return $this->render('mobile', ['copy' => $mapModels]);
    }

    protected function registerClientScript()
    {
        $view = $this->getView();
        ProsSectionAsset::register($view);
    }

}