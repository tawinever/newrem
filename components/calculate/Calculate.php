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
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;

class Calculate extends Widget
{
    public $bread = [];
    public function run()
    {
        parent::run();
        $this->fetchBread();
        if(!$this->isValidFetchData())
            throw new NotFoundHttpException('The requested page does not exist.');
        $this->registerClientScript();
        return $this->render('view');
    }

    private function getPrices()
    {
        $prices = Price::find()->where(['status' => Price::STATUS_ACTIVE])->all();
        $ans = [];
        $categoryMap = Category::getParentCategory();
        $deviceMap = Device::getDeviceMap();
        $deviceCategoryMap = ArrayHelper::map(Device::find()->all(),'id','category_id');
        $repairMap = Repair::getRepairMap();
        foreach ($prices as $price){
            $item = [
                'category' => $categoryMap[$deviceCategoryMap[$price->device_id]],
                'device' => $deviceMap[$price->device_id],
                'repair' => $repairMap[$price->repair_id],
                'price' => $price->price,
                'info' => $price->info
            ];
            $ans [] = $item;
        }
        return $ans;
    }

    private function fetchBread(){
        if(Yii::$app->request->get('category'))
            $this->bread[] = str_replace('_',' ',Yii::$app->request->get('category'));
        if(Yii::$app->request->get('model'))
            $this->bread[] = str_replace('_',' ',Yii::$app->request->get('model'));
    }

    private function isValidFetchData(){
        if(count($this->bread) == 1){
            $category = Category::find()->where(['title' => $this->bread[0], 'status' => Category::STATUS_ACTIVE])->one();
            if(is_null($category)) return false;
            $arDeviceIds = ArrayHelper::getColumn($category->devices,'id',false);
            if(!Price::find()->where(['device_id' => $arDeviceIds, 'status' => Price::STATUS_ACTIVE])->exists())
                return false;
        }
        if(count($this->bread) == 2){
            $device = Device::find()->where(['title' => $this->bread[1]])->one();
            if(is_null($device)) return false;
            if($device->category->title != $this->bread[0]) return false;
            if(!Price::find()->where(['device_id' => $device->id, 'status' => Price::STATUS_ACTIVE])->exists())
                return false;
        }
        return true;
    }

    protected function registerClientScript()
    {
        $view = $this->getView();
        CalculateAsset::register($view);
        $js = "initCalc(" . json_encode($this->getPrices()) . ", " . json_encode($this->bread) . ");";
        $view->registerJs($js);
    }
}