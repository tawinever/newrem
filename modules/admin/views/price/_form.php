<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Price */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="price-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'device_id')->dropDownList(\app\models\Device::getDeviceMap()) ?>

    <?= $form->field($model, 'repair_id')->dropDownList(\app\models\Repair::getRepairMap()) ?>

    <?= $form->field($model, 'price',['template' => '
    <label>{label}</label>
    <div class="input-group" style="max-width: 200px">
        {input}
        <div class="input-group-addon">
            KZT
        </div>
    </div>
    {error}{hint}
    '])->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(\app\models\Price::getStatuses()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
