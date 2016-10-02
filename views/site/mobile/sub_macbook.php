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

$this->title = 'Ремонт Макбуков | Macbook в Астане';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Качественный ремонт макбуков(Pro,Air) в Астане. Ремонт любой сложности(замена матрицы, ремонт платы). Гарантия до 3 месяцев. Бесплатная диагностика. . С 10:00 до 20:00 без выходных.'
]);
?>
<?= \app\components\stickMenu\StickMenu::widget(['fixed' => true]) ?>

<?= MainSection::widget(['page' => 'macbook']) ?>
<?= \app\components\sections\priceSection\PriceSection::widget(['category_title' => 'Mac'])?>
<?= ProsSection::widget() ?>
<?= FeedSection::widget() ?>
<?= MapSection::widget() ?>
<?=\app\components\orderPopup\OrderPopup::widget() ?>
