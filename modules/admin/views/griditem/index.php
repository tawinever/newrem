<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GriditemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Griditems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="griditem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Griditem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'parent_page_id',
                'filter' => \app\models\Page::getPageMap(),
                'value' => function($data){
                    return $data->parentPage->title;
                },
            ],
            [
                'attribute' => 'page_id',
                'filter' => \app\models\Page::getPageMap(),
                'value' => function($data){
                    return $data->page->title;
                },
            ],
            'title:ntext',
            'subtitle:ntext',
            // 'info:ntext',
            // 'order',
            // 'type',
            // 'color',
            // 'image:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
