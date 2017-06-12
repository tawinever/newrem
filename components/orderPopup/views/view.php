<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 25.06.2016
 * Time: 2:53
 */
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html; ?>
<div class="order-popup">
    <div class="order-popup-wrap">
    </div>
    <div class="order-popup-container">
        <i id="order-popup-close" class="order-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 64 64">
                <g>
                    <path fill="#1e3948"
                          d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
                </g>
            </svg>
        </i>
        <h2 class="title ta-c">Заявка на ремонт</h2>
        <div class="order-popup-info ta-c">

        </div>
        <div class="subtitle ta-c">
            Мы перезвоним в течение 5 мин. (c 9:30 до 21:00, без выходных)
            <br>
            Либо оформите по тел:
            <br>
            <a href="tel:+77021236622">
                +7 (702) 123 6622
            </a>
        </div>


        <?php $form = ActiveForm::begin(['options' => ['style' => 'margin-top:30px;']]); ?>

        <?= $form->field($model, 'sender_name')->textInput([
            'maxlength' => true,
            'placeholder' => 'Ваше имя'
        ])->label('Как обратиться к вам?') ?>

        <?= $form->field($model, 'sender_number')->widget(\yii\widgets\MaskedInput::className(), [
            'mask' => '+9(999)-999-9999',
            'clientOptions' => [
                'jitMasking' => true
            ],
        ])->label('Куда позвонить?') ?>

        <?= $form->field($model, 'info')->hiddenInput()->label(false) ?>

        <div class="form-group ta-c">
            <?= Html::submitButton('Оставить заявку', ['class' => 'ctr-btn ctr-green']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
