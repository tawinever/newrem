<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 24.06.2016
 * Time: 22:31
 */

namespace app\components\sections\priceSection;


use app\components\parents\PageWidget;
use app\models\Device;
use app\models\Price;
use app\models\Repair;
use yii\base\UserException;
use yii\helpers\ArrayHelper;

class PriceSection extends PageWidget
{
    public $prices;
    public $devices;
    public $repairDictionary;
    public $deviceDictionary;
    public $orderedDeviceList;
    public $calcUrl;
    public $activeTab;
    //Mode determining is it for general price as iPhone page or trivial page as iPhone 6s
    public $mode = 'general';
    //fields for extended mode
        //if need you should sort here to change order in frontend
        public $tabParentDevices = [];
        public $tabsAvailableDevices = [];
        public $tabsAvailableRepairs = [];

    public function init()
    {
        parent::init();

        $this->repairDictionary = Repair::getRepairDictionary();
        $this->deviceDictionary = Device::getDeviceDictionary();
        $this->orderedDeviceList = $this->getOrderedDeviceList();



        if($this->validateParent()){
            //for extended mode init
            if(isset($this->simpleData['type']) && $this->simpleData['type'] == 'extended')
            {
                $this->mode = "extended";

                //A J S i td i tp
                $this->devices = ArrayHelper::getColumn(Device::find()->where(['parent_id' => $this->simpleData['deviceParentId']])->orderBy(['poryadok' =>SORT_DESC])->asArray()->all(),'id');
                //getting tab owner devices id
                $this->tabParentDevices = $this->devices;

                $this->devices = Device::find()->where(['parent_id' => $this->devices])->asArray()->all();
                //getting prices for all grandson devices
                $this->prices = ArrayHelper::index(Price::find()->where(['device_id' => ArrayHelper::getColumn($this->devices,'id')])->asArray()->all(),null, 'device_id');


                //setting array structure as array[device_id][repair_id][0] = price object
                $tmpArray = [];
                foreach ($this->prices as $key => $price)
                {
                    $tmpArray[$key] = ArrayHelper::index($price,null, 'repair_id');
                }
                $this->prices = $tmpArray;



                //creating Available devices and repairs arrays
                foreach ($this->tabParentDevices as $tabOwner){
                    $this->tabsAvailableDevices[$tabOwner] = [];
                    $this->tabsAvailableRepairs[$tabOwner] = [];
                    foreach ($this->prices as $key => $value)
                    {
                        //Check is this key in array and is this key is child of tabowner
                        if($this->deviceDictionary[$key]->parent_id == $tabOwner) {
                            if(!in_array($key,$this->tabsAvailableDevices[$tabOwner],$key))
                                $this->tabsAvailableDevices[$tabOwner][] = $key;
                            $tmpRepairIdArray = array_keys($value);
                            foreach ($tmpRepairIdArray as $tmpRepairId){
                                if(!in_array($tmpRepairId,$this->tabsAvailableRepairs[$tabOwner]))
                                    $this->tabsAvailableRepairs[$tabOwner][] = $tmpRepairId;
                            }

                        }
                    }
                }
            }
            //for classic mode init
            else {
                $this->devices = Device::find()->where(['parent_id' => $this->simpleData['deviceParentId']])->orderBy(['poryadok' =>SORT_DESC])->asArray()->all();
                // If device has not got any child we will show repair prices only for this device
                if(count($this->devices) == 0){
                    $this->mode = 'trivial';
                    $this->devices = Device::find()->where(['id' => $this->simpleData['deviceParentId']])->asArray()->all();
                }

                $this->prices = ArrayHelper::index(Price::find()->where(['device_id' => ArrayHelper::getColumn($this->devices,'id')])->asArray()->all(),null, 'device_id');
                //sort by position of device id
                $this->prices = $this->getOrderedByDevice($this->prices);
            }
        }
    }


    public function getOrderedDeviceList(){
        return ArrayHelper::getColumn(Device::find()->orderBy(['poryadok' => SORT_ASC])->asArray()->all(),'id');
    }

    public function getOrderedByDevice($priceAr){
        $newArrayCollection = [];
        foreach ($this->orderedDeviceList as $orderedDeviceId)
        {
            if(isset($priceAr[$orderedDeviceId]))
            {
                $newArrayCollection[$orderedDeviceId] =  $priceAr[$orderedDeviceId];
            }

        }
        return $newArrayCollection;
    }

    public function validateParent(){
        if(isset($this->simpleData['deviceParentId']))
        {
            if($this->simpleData['deviceParentId'] === 'null')
                $this->simpleData['deviceParentId'] = null;
            return true;
        }
        else{
            throw new UserException('In widget price you should set SWD deviceParentId');
        }
    }

    public function run()
    {
        parent::run();

        $this->registerClientScript();

        if($this->mode == 'extended'){
            if(\Yii::getAlias('@device') == 'mobile') {
                return  $this->render('mobile_view3',[
                    'parent_device_id' => $this->simpleData['deviceParentId'],
                    'prices' => $this->prices,
                    'repairDictionary' => $this->repairDictionary,
                    'deviceDictionary' => $this->deviceDictionary,
                    'calcUrl' => $this->simpleData['calcUrl'],
                    'activeTab' => $this->simpleData['activeTab'],
                    'tabParentDevices' => $this->tabParentDevices,
                    'tabsAvailableDevices' => $this->tabsAvailableDevices,
                    'tabsAvailableRepairs' => $this->tabsAvailableRepairs,

                ]);
            }
            return  $this->render('view3',[
                'parent_device_id' => $this->simpleData['deviceParentId'],
                'prices' => $this->prices,
                'repairDictionary' => $this->repairDictionary,
                'deviceDictionary' => $this->deviceDictionary,
                'calcUrl' => $this->simpleData['calcUrl'],
                'activeTab' => $this->simpleData['activeTab'],
                'tabParentDevices' => $this->tabParentDevices,
                'tabsAvailableDevices' => $this->tabsAvailableDevices,
                'tabsAvailableRepairs' => $this->tabsAvailableRepairs,

            ]);
        }


        if($this->mode == 'general'){
            if(\Yii::getAlias('@device') == 'mobile') {
                return  $this->render('mobile_view',[
                    'parent_device_id' => $this->simpleData['deviceParentId'],
                    'prices' => $this->prices,
                    'repairDictionary' => $this->repairDictionary,
                    'deviceDictionary' => $this->deviceDictionary,
                    'calcUrl' => $this->simpleData['calcUrl'],
                    'activeTab' => $this->simpleData['activeTab'],
                    'simpleData' => $this->simpleData,
                ]);
            }
            return  $this->render('view',[
                'parent_device_id' => $this->simpleData['deviceParentId'],
                'prices' => $this->prices,
                'repairDictionary' => $this->repairDictionary,
                'deviceDictionary' => $this->deviceDictionary,
                'calcUrl' => $this->simpleData['calcUrl'],
                'activeTab' => $this->simpleData['activeTab'],
                'simpleData' => $this->simpleData,
            ]);
        }

        if(\Yii::getAlias('@device') == 'mobile') {
            return  $this->render('mobile_view2',[
                'parent_device_id' => $this->simpleData['deviceParentId'],
                'prices' => $this->prices,
                'repairDictionary' => $this->repairDictionary,
                'deviceDictionary' => $this->deviceDictionary,
                'calcUrl' => $this->simpleData['calcUrl'],
                'activeTab' => $this->simpleData['activeTab'],
            ]);
        }

        return  $this->render('view2',[
            'parent_device_id' => $this->simpleData['deviceParentId'],
            'prices' => $this->prices,
            'repairDictionary' => $this->repairDictionary,
            'deviceDictionary' => $this->deviceDictionary,
            'calcUrl' => $this->simpleData['calcUrl'],
            'activeTab' => $this->simpleData['activeTab'],
        ]);
    }


    protected function registerClientScript()
    {
        $view = $this->getView();
        if($this->mode == 'general' || $this->mode == 'extended')
            PriceSectionAsset::register($view);
    }
}