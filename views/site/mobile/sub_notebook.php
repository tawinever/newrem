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

$this->title = 'Ремонт ноутбуков в Астане';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Качественный ремонт ноутбуков (Sony,HP, Acer,Asus, Dell, Samsung) в Астане. Ремонт любой сложности. Гарантия до 3 месяцев. Бесплатная диагностика. . С 10:00 до 20:00 без выходных.'
]);
?>
<?= \app\components\stickMenu\StickMenu::widget(['fixed' => true]) ?>

<?= MainSection::widget(['page' => 'notebook']) ?>
<?= \app\components\sections\priceSection\PriceSection::widget(['category_title' => 'Ноутбук'])?>
<?= ProsSection::widget(['page' =>'notebook']) ?>
<?= FeedSection::widget() ?>
<?= MapSection::widget() ?>
<?=\app\components\orderPopup\OrderPopup::widget() ?>
