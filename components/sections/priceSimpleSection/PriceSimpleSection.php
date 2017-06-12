<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 24.06.2016
 * Time: 22:31
 */

namespace app\components\sections\priceSimpleSection;


use app\models\Category;
use app\models\Device;
use app\models\Price;
use app\models\Repair;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class PriceSimpleSection extends Widget
{
    public $page= 'display';

    const DISPLAY_REPAIR_ID = 4;

    public function run()
    {
        parent::run();

        $prices = $this->getPrices();


        if(\Yii::getAlias('@device') != 'mobile')
        {
            return $this->render('view',['prices' => $prices]);
        }
        return $this->render('mobile',[]);
    }

    private function getPrices()
    {
        return Price::find()->where(['repair_id' => self::DISPLAY_REPAIR_ID])->all();
    }






}