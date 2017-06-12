<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 03.09.2016
 * Time: 13:28
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<div class="order-status-container">
    <h1 class="ta-c">
        Узнайте статус вашего заказа
    </h1>
    <div class="order-status-form-container">
        <div>
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'idNumber')->textInput(['type' => 'number'])->label('Введите номер заказа') ?>

            <?= Html::submitButton('Узнать статус по номеру', ['class' => 'ctr-btn ctr-green']) ?>

            <?php ActiveForm::end(); ?>  
        </div>
        <div>
            <h3>ИЛИ</h3>
        </div>
        <div>
            <?php $nform = ActiveForm::begin(); ?>

            <?= $nform->field($nmodel, 'phoneNumber')->widget(\yii\widgets\MaskedInput::className(), [
                'mask' => '+9(999)-999-99-99',
                'clientOptions' => [
                    'jitMasking' => true
                ],
            ])->label('Введите номер телефона') ?>

            <?= Html::submitButton('Узнать статус по телефону ', ['class' => 'ctr-btn ctr-green']) ?>

            <?php ActiveForm::end(); ?>
        </div>
            
    </div>
    

    <?if(isset($result)):?>

        <?if($result->count == 0):?>
            <h2 class="order-summary">Заказ не найдено</h2>
        <?else:?>
        <div class="order-summary">
            <h2>Ваш Номер заказа №<?=$result->data[$result->count-1]->id_label?> от <?=\Yii::$app->formatter->asDate($result->data[$result->count-1]->created_at/1000)?></h2>
            <h3>Ваше устройство: <?=$result->data[$result->count-1]->brand?> <?=$result->data[$result->count-1]->model?></h3>
            <h3>Статус ремонта: <?=app\components\remOnlineApi\RemOnlineApi::orderStatusDecorator($result->data[$result->count-1]->status)?></h3>
            <?if($result->data[$result->count-1]->status->group == 6):?>
                <?if(time() > $result->data[$result->count-1]->warranty_date/1000): ?>
                    <h3>Ваш срок гарантии уже истек.</h3>
                <? else: ?>
                    <h3>Гарантия до <?=\Yii::$app->formatter->asDate($result->data[$result->count-1]->warranty_date/1000)?></h3>
                <?endif;?>
            <?endif;?>

            <?if(isset($result->data[$result->count-1]->resume) && strlen($result->data[$result->count-1]->resume) > 0):?>
                <h3>Заметка мастера : <?=$result->data[$result->count-1]->resume?> </h3>
            <?endif;?>
            
        </div>
        <?endif;?>
    <?endif;?>
</div>







