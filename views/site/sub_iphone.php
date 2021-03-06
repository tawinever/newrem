<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 25.06.2016
 * Time: 1:51
 */
use app\components\sections\feedSection\FeedSection;
use app\components\sections\lastSection\LastSection;
use app\components\sections\longreadSection\LongreadSection;
use app\components\sections\mainSection\MainSection;
use app\components\sections\mapSection\MapSection;
use app\components\sections\pros2Section\Pros2Section;

$this->title = 'Ремонт Айфонов в Астане | Ремонт iPhone в Астане';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Срочный ремонт Айфонов в Астане. 90% ремонтов выполняется на ваших глазах в течение 30 минут. Бесплатная диагностика. Гарантия до 3-х месяцев. Замена стекла от 7000тенге, замена дисплея от 8000 тенге. Работаем с 10:00 до 20:0a0 без выходных.'
]);
?>

<?= \app\components\stickMenu\StickMenu::widget() ?>
<?= MainSection::widget(['page' => 'iphone']) ?>
<?= \app\components\sections\priceSection\PriceSection::widget(['page' => 'iphone'])?>
<?= \app\components\sections\prosSection\ProsSection::widget(['page' => 'iphone']) ?>
<?= Pros2Section::widget(['page' => 'iphone']) ?>
<?= FeedSection::widget(['page' => 'iphone']) ?>
<?= LastSection::widget(['page' => 'iphone']) ?>
<?= MapSection::widget() ?>
<?= LongreadSection::widget(['page' => 'iphone']) ?>
<?=\app\components\orderPopup\OrderPopup::widget() ?>
