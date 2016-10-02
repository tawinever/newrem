<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:04
 */

namespace app\components\sections\gridSection;


use app\models\Copyright;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class GridSection extends Widget
{
    public $page = "home";
    public function run()
    {
        parent::run();
        if(\Yii::getAlias('@device') != 'mobile')
        {
            $models = Copyright::find()->where(['page' => $this->page, 'section' => 'gridSection'])->all();
            $mapModels = ArrayHelper::index($models,'position');
            return $this->render('view',['copy' => $mapModels]);
        }
        return $this->render('mobile');
    }

}