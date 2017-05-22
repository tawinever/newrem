<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 25.06.2016
 * Time: 2:47
 */

namespace app\components\orderPopup;


use app\models\Notification;
use Yii;
use yii\base\Widget;

class OrderPopup extends Widget
{
    public function run()
    {
        parent::run();

        $this->registerClientScript();
        $model = new Notification();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->mailer->compose('order',['model' => $model])
                ->setTo(Yii::$app->params['orderReceiveEmail'])
                ->setFrom(Yii::$app->params['supportEmail'])
                ->setSubject('Заказ от '.$model->sender_name.' номер: '.$model->sender_number)
                ->send();
            Yii::$app->getResponse()->redirect(['site/thanks']);
        } else {
            if(\Yii::getAlias('@device') == 'mobile') {
                return $this->render('mobile', [
                    'model' => $model,
                ]);
            }
            return $this->render('view', [
                'model' => $model,
            ]);
        }
    }

    protected function registerClientScript()
    {
        $view = $this->getView();
        OrderPopupAsset::register($view);
    }
}