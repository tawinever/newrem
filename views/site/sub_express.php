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

$this->title = 'Ремонт Айфонов | iPhone на выезде в Астане';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Выездной ремонт Айфонов за 20 мин при вас. Приедем и починим ваш iPhone в удобном для вас месте и время. Гарантия до 3-х месяцев. Работаем с 10:00 до 20:00 без выходных.'
]);
?>

<?= \app\components\stickMenu\StickMenu::widget() ?>
<?= MainSection::widget(['page' => 'express']) ?>
<?= \app\components\sections\priceSection\PriceSection::widget(['category_title' => 'Express'])?>
<?= ProsSection::widget(['page' => 'express']) ?>
<?= Pros2Section::widget(['page' => 'express']) ?>
<?= FeedSection::widget() ?>
<?= LastSection::widget(['page' => 'express']) ?>
<?= MapSection::widget() ?>
<?=\app\components\orderPopup\OrderPopup::widget() ?>
