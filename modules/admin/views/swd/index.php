<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SwdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Swds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="swd-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Swd', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'page_id',
                'filter' => \app\models\Page::getPageMap(),
                'value' => function($data){
                    return $data->page->title;
                },
            ],
            [
                'attribute' => 'widget_namespace',
                'filter' => Yii::$app->params['widgets'],
                'value' => function($data){
                    return Yii::$app->params['widgets'][$data->widget_namespace];
                },
            ],
            'key',
            'value:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
