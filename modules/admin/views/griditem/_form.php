<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Griditem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="griditem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parent_page_id')->dropDownList(\app\models\Page::getPageMap()) ?>

    <?= $form->field($model, 'page_id')->dropDownList(\app\models\Page::getPageMap()) ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'subtitle')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'info')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <?= $form->field($model, 'type')->dropDownList(['1' => 'small', '2' => 'big']) ?>

    <?= $form->field($model, 'color')->dropDownList(['1' => 'blue', '2' => 'orange','3' => 'green', '4' => 'grey']) ?>

    <?= $form->field($model, 'image')->textarea(['rows' => 3]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
