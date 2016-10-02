<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 24.06.2016
 * Time: 22:31
 */

namespace app\components\sections\priceSection;


use app\models\Category;
use app\models\Device;
use app\models\Price;
use app\models\Repair;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class PriceSection extends Widget
{
    public $category_title = 'Iphone';
    private $category;

    public function run()
    {
        parent::run();

        //get category model
        $this->setCategory();

        //get all child devices as models for out category
        $devices = $this->getDevices();

        //get all prices that relate to our devices
        $prices = $this->getPrices($devices);
        $mappedPrices = ArrayHelper::index($prices,function($e){
            return $e->repair_id.'-'.$e->device_id;
        });

        //all repairs that were attended in prices
        $repairs = $this->getRepairs($prices);
        
        //register scripts
        $this->registerClientScript();

        if(\Yii::getAlias('@device') != 'mobile')
        {
            return $this->render('view',['repairs' => $repairs, 'prices' => $prices,
                'devices' => $devices,
                'category' => $this->category,
                'mappedPrices' => $mappedPrices,
            ]);
        }
        return $this->render('mobile',['repairs' => $repairs, 'prices' => $prices,
            'devices' => $devices,
            'category' => $this->category,
            'mappedPrices' => $mappedPrices,
        ]);
    }

    private function setCategory()
    {
        $this->category = Category::find()->where(['title' => $this->category_title])->one();
    }

    private function getDevices()
    {
        if($this->category != null)
            return Device::find()->where(['category_id' => $this->category->id])->all();
        else
            return [];
    }

    private function getPrices($arDevices)
    {
        $arDeviceIds = array_unique(ArrayHelper::getColumn($arDevices,'id',false));
        return Price::find()->where(['device_id' => $arDeviceIds])->all();
    }

    private function getRepairs($arPrices)
    {
        $arRepairIds = ArrayHelper::getColumn($arPrices,'repair_id',false);
        return Repair::find()->where(['id' => $arRepairIds])->all();
    }

    protected function registerClientScript()
    {
        $view = $this->getView();
        PriceSectionAsset::register($view);
    }
}