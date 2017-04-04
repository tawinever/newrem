<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Griditem */

$this->title = 'Create Griditem';
$this->params['breadcrumbs'][] = ['label' => 'Griditems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="griditem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
