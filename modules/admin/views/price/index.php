<?php

use kartik\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PriceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Price', ['create'], ['class' => 'btn btn-success']) ?>

        <?= Html::a('Devices', ['device/index'], ['class' => 'btn btn-primary']) ?>

        <?= Html::a('Categories', ['category/index'], ['class' => 'btn btn-primary']) ?>

        <?= Html::a('Repairs', ['repair/index'], ['class' => 'btn btn-primary']) ?>
    </p>
   <?//= GridView::widget([
//        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
//        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//
//            'id',
//            [
//                'attribute' => 'device_id',
//                'filter' => \app\models\Device::getDeviceMap(),
//                'value' => function($data){
//                    return $data->device->title;
//                },
//            ],
//            [
//                'attribute' => 'repair_id',
//                'filter' => \app\models\Repair::getRepairMap(),
//                'value' => function($data){
//                    return $data->repair->title;
//                },
//            ],
//            'info',
//            [
//                'attribute' => 'status',
//                'contentOptions' => ['style' => 'width:100px'],
//                'filter' => \app\models\Price::getStatuses(),
//                'value' => function($data){
//                    return $data->getStatus();
//                },
//            ],
//            [
//                'attribute' => 'price',
//                'contentOptions' => ['style' => 'width:75px'],
//                'filterInputOptions' => ['type' => 'number', 'class' => 'form-control'],
//            ],
//
//            [
//                'attribute' => 'price_range',
//                'contentOptions' => ['style' => 'width:50px'],
//                'filterInputOptions' => ['type' => 'number', 'class' => 'form-control'],
//                'format' => 'raw',
//                'value' => function ($data) {
//                    return $data->price;
//                },
//            ],
//            ['class' => 'yii\grid\ActionColumn'],
//        ],
//    ]);

    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'device_id',
                'filter' => \app\models\Device::getDeviceMap(),
                'value' => function($data){
                    return $data->device->title;
                },
            ],
            [
                'attribute' => 'repair_id',
                'filter' => \app\models\Repair::getRepairMap(),
                'value' => function($data){
                    return $data->repair->title;
                },
            ],
            'info',
            [
                'attribute' => 'status',
                'contentOptions' => ['style' => 'width:100px'],
                'filter' => \app\models\Price::getStatuses(),
                'value' => function($data){
                    return $data->getStatus();
                },
            ],
//            [
//                'attribute' => 'price',
//                'contentOptions' => ['style' => 'width:75px'],
//                'filterInputOptions' => ['type' => 'number', 'class' => 'form-control'],
//            ],
            [
                'class'=>'kartik\grid\EditableColumn',
                'attribute'=>'price',
                'editableOptions'=>[
                    'header'=>'Price',
                    'inputType'=>\kartik\editable\Editable::INPUT_TEXT,
                ],
                'hAlign'=>'right',
                'vAlign'=>'middle',
                'width'=>'100px',
                'format'=>['decimal', 0],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);





    ?>

</div>
