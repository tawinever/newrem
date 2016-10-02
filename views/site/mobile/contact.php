<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 02.07.2016
 * Time: 3:54
 */
$this->title = 'Контакты Remonteka в Астане';

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Контакты сервисного центра Remonteka по ремонту телефонов и ноутбуков в Астане. Срочный ремонт айфонов, айпадов, планшетов, с гарантией от 1 месяца. Низкие цены.'
]);

?>
<?= app\components\stickMenu\StickMenu::widget(['fixed' => true])?>
<?= \app\components\contact\WidgetContact::widget(['title' => $this->title]); ?>