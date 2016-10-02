<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:04
 */

namespace app\components\sections\prosSection;


use app\models\Copyright;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class ProsSection extends Widget
{
    public $page = "home";
    public function run()
    {
        parent::run();

        $models = Copyright::find()->where(['page' => $this->page, 'section' => 'prosSection'])->all();
        $mapModels = ArrayHelper::index($models,'position');
        if(\Yii::getAlias('@device') != 'mobile')
        {
            if($this->page== "express"){
                return $this->render('express', ['copy' => $mapModels]);
            }
            if($this->page== "notebook" || $this->page== "macbook"){
                return $this->render('notebook', ['copy' => $mapModels]);
            }
            return $this->render('view',['copy' => $mapModels]);
        }
        if($this->page== "express"){
            return $this->render('mobile_express', ['copy' => $mapModels]);
        }
        if($this->page== "notebook" || $this->page== "macbook"){
            return $this->render('mobile_notebook', ['copy' => $mapModels]);
        }
        return $this->render('mobile', ['copy' => $mapModels]);
    }

}