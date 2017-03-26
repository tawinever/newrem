<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Wps */

$this->title = 'Create Wps';
$this->params['breadcrumbs'][] = ['label' => 'Wps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wps-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
