<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 02.07.2016
 * Time: 4:53
 */

namespace app\components\calculate;


use app\models\Category;
use app\models\Device;
use app\models\Price;
use app\models\Repair;
use Yii;
use yii\base\UserException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;

class Calculate extends Widget
{
    public $bread = [];
    public $deviceBread = [];
    public function run()
    {
        parent::run();
        $this->fetchBread();
        if(!$this->isValidFetchData())
            throw new UserException('Invalid Device Parameters');
        $this->registerClientScript();
        return $this->render('view');
    }

    private function getDeviceTree(){
        $device = Device::find()->asArray()->all();
        return $device;
    }

    private function getIndexedPrices(){
        return ArrayHelper::index(Price::find()->asArray()->all(),null, 'device_id');
    }

    private function fetchBread(){
        if(Yii::$app->request->get('devices') != null){
            $params = explode('/', Yii::$app->request->get('devices'));
            foreach ($params as $param)
                $this->bread[] = str_replace('_',' ',$param);
        }
    }

    private function getCurrentPossibleChildren($root){
        $ans = Device::find()->where(['parent_id' => $root['id']])->asArray()->all();
        $ans1 = Device::find()->where(['id' => explode('|',$root['add_children'])])->asArray()->all();
        return array_merge($ans,$ans1);
    }

    private function isValidFetchData(){
        $currentPossibleDevices = Device::find()->where(['is_root' => 1])->asArray()->all();
        foreach ($this->bread as $crumb){
            $valid = false;
            foreach ($currentPossibleDevices as $currentPossibleDevice)
            {
                if($currentPossibleDevice['title'] == $crumb)
                {
                    $valid = true;
                    $this->deviceBread[] = $currentPossibleDevice;
                    $currentPossibleDevices = $this->getCurrentPossibleChildren($currentPossibleDevice);
                    break;
                }
            }
            if(!$valid){
                return false;
            }
        }
        return true;
    }

    protected function registerClientScript()
    {
        $view = $this->getView();
        CalculateAsset::register($view);
        $js = "initCalc(" . json_encode($this->getDeviceTree()) . ", " . json_encode(Device::getDeviceDictionaryAsArray()) . ", "  .  json_encode($this->getIndexedPrices()) . ", " . json_encode(Repair::getRepairMap()) . ", " . json_encode($this->deviceBread) .");";
        $view->registerJs($js);
    }
}