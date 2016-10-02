<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 23.06.2016
 * Time: 22:07
 */

namespace app\components\sections\feedSection;


use app\models\Copyright;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class FeedSection extends Widget
{
    public $page = "home";
    public function run()
    {
        parent::run();
        if(\Yii::getAlias('@device') != 'mobile')
            $models = Copyright::find()->where(['page' => $this->page, 'section' => 'feedSection'])->all();
        else
            $models = Copyright::find()->where(['page' => $this->page, 'section' => 'feedSection'])->limit(3)->all();

        return $this->render('view',['feedbacks' => $models]);
    }
}