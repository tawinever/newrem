<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 02.07.2016
 * Time: 3:54
 */
$this->title = 'Узнать цену поломки';

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Узнай цену поломки своего устройство'
]);

?>
<?= app\components\stickMenu\StickMenu::widget(['fixed' => true])?>
<?=\app\components\calculate\Calculate::widget() ?>
<?=\app\components\orderPopup\OrderPopup::widget() ?>
