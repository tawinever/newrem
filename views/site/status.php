<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 02.09.2016
 * Time: 11:26
 */

$this->title = 'Статусы заказа | Remonteka в Астане';
;
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Статусы заказа сервисного центра Remonteka по ремонту телефонов и ноутбуков  в Астане.  Срочный ремонт айфонов,  айпадов, планшетов, с гарантией  от 1 месяца. Низкие цены.'
]);

?>
<?= app\components\stickMenu\StickMenu::widget(['fixed' => true])?>
<?= app\components\orderStatus\OrderStatus::widget(); ?>

