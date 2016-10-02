<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 02.07.2016
 * Time: 3:54
 */
$this->title = 'Узнать цену поломки | iPhone iPad Samsung';

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Узнай цену поломки своего устройство | iPhone iPad Samsung'
]);

?>
<?= app\components\stickMenu\StickMenu::widget(['fixed' => true])?>
<?=\app\components\calculate\Calculate::widget() ?>
<?=\app\components\orderPopup\OrderPopup::widget() ?>
