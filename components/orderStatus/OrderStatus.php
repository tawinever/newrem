<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 03.09.2016
 * Time: 7:55
 */

namespace app\components\orderStatus;


use app\components\remOnlineApi\RemOnlineApi;
use app\models\RemOrder;
use Yii;
use yii\base\Widget;

class OrderStatus extends Widget
{
    public function run()
    {
        parent::run();

        $model = new RemOrder(['scenario' => RemOrder::SCENARIO_ID]);
        $nmodel = new RemOrder(['scenario' => RemOrder::SCENARIO_PHONE]);

        if ($model->load(Yii::$app->request->post()) && isset($model->idNumber)) {
            $result = RemOnlineApi::getOrderById($model->idNumber);
            return $this->render('view',['model' => $model, 'nmodel' => $nmodel,'result' => $result]);
        } else if ($nmodel->load(Yii::$app->request->post())) {
            $result = RemOnlineApi::getOrderByPhone($nmodel->phoneNumber);
            return $this->render('view',['model' => $model, 'nmodel' => $nmodel,'result' => $result]);
        } else {
            return $this->render('view', [
                'model' => $model,
                'nmodel' => $nmodel,
            ]);
        }
    }
}