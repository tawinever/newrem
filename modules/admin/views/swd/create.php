<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Swd */

$this->title = 'Create Swd';
$this->params['breadcrumbs'][] = ['label' => 'Swds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="swd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
