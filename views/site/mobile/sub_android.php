<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 25.06.2016
 * Time: 1:51
 */
use app\components\sections\feedSection\FeedSection;
use app\components\sections\lastSection\LastSection;
use app\components\sections\mainSection\MainSection;
use app\components\sections\mapSection\MapSection;
use app\components\sections\pros2Section\Pros2Section;
use app\components\sections\prosSection\ProsSection;

$this->title = 'Ремонт сотовых телефонов в Астане';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Ремонт сотовых телефонов (Samsung, HTC, Meizu, Huawei, LG, Xiaomi, Lenovo) любой сложности. Бесплатная диагностика. Гарантия до 3-х месяцев. Работаем с 10:00 до 20:00 без выходных.'
]);
?>
<?= \app\components\stickMenu\StickMenu::widget(['fixed' => true]) ?>

<?= MainSection::widget(['page' => 'android']) ?>
<?= \app\components\sections\priceSection\PriceSection::widget(['category_title' => 'Телефон'])?>
<?= ProsSection::widget() ?>
<?= FeedSection::widget() ?>
<?= MapSection::widget() ?>
<?=\app\components\orderPopup\OrderPopup::widget() ?>
