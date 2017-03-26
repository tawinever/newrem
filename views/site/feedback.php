<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 02.07.2016
 * Time: 3:54
 */
/** @var \app\models\Copyright[] $feedbacks */

$this->title = 'Отзывы Remonteka в Астане';

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Отзывы сервисного центра Remonteka по ремонту телефонов и ноутбуков  в Астане.  Срочный ремонт айфонов,  айпадов, планшетов, с гарантией  от 1 месяца. Низкие цены.'
]);

?>
<?= app\components\stickMenu\StickMenu::widget(['fixed' => true])?>

<div class="page-feedback">
    <h2 class="ta-c">Наши отзывы</h2>

    <div class="feedback-item-container">
    <? foreach ($feedbacks as $feedback):?>
        <div class="feedback-item">
            <?=$feedback->content ?>
        </div>
    <?endforeach;?>
    </div>
</div>
