<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 5/22/17
 * Time: 4:05 PM
 */

namespace app\components\sections\priceRepairSection;


use app\components\parents\PageWidget;
use app\models\Device;
use app\models\Price;
use app\models\Repair;
use yii\base\UserException;
use yii\helpers\ArrayHelper;

class PriceRepairSection extends PageWidget
{
    public $calcUrl = 'site/calc';
    public $deviceAr;
    public $repair;
    public $deviceDictionary;
    public $prices;

    public function init()
    {
        parent::init();
        if(isset($this->simpleData['calcUrl']))
            $this->calcUrl = $this->simpleData['calcUrl'];
        if(isset($this->simpleData['repair_id'])){
            $this->repair = Repair::findOne($this->simpleData['repair_id']);
        }
        if(is_null($this->repair))
            throw new UserException('You should enter repair id in swd');

        if(isset($this->simpleData['devices']))
        {
            $this->deviceAr = explode('|',$this->simpleData['devices']);
        }
        else throw new UserException('You should enter devices in swd');
        $this->deviceDictionary = Device::getDeviceDictionary();
        $this->prices = ArrayHelper::index(Price::find()->where(['device_id' => $this->deviceAr,'repair_id' => $this->simpleData['repair_id']])->all(),null, 'device_id');

    }

    public function run()
    {
        parent::run();
        return $this->render('view',[
            'calcUrl' => $this->calcUrl,
            'deviceAr' => $this->deviceAr,
            'repair' => $this->repair,
            'deviceDictionary' => $this->deviceDictionary,
            'prices' => $this->prices
        ]);
    }






}