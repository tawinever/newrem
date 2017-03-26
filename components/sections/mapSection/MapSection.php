<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 23.06.2016
 * Time: 22:53
 */

namespace app\components\sections\mapSection;


use yii\base\Widget;

class MapSection extends Widget
{
    public function run()
    {
        parent::run();
        if(\Yii::getAlias('@device') != 'mobile')
        {
            return $this->render('view');
        }
        return $this->render('mobile');
    }
}