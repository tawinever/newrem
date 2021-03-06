<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Wps */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wps-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'page_id')->dropDownList(\app\models\Page::getPageMap()) ?>

    <?//= $form->field($model, 'page_id')->textInput() ?>

    <?//= $form->field($model, 'widget_namespace')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'widget_namespace')->dropDownList(Yii::$app->params['widgets']) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
