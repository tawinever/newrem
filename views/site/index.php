<?php

/* @var $this yii\web\View */

use app\components\sections\feedSection\FeedSection;
use app\components\sections\gridSection\GridSection;
use app\components\sections\lastSection\LastSection;
use app\components\sections\mainSection\MainSection;
use app\components\sections\mapSection\MapSection;
use app\components\sections\pros2Section\Pros2Section;
use app\components\sections\prosSection\ProsSection;
use yii\helpers\Url;

$this->title = 'Ремонт телефонов, ноутбуков в Астане';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Сервисный центр по ремонту ноутбуков и телефонов в Астане.. 80% ремонтов выполняется на ваших глазах в течение 40 минут. Гарантия до 3 месяцев. Бесплатная диагностика. С 10:00 до 20:00 без выходных.'
]);

?>

<?= \app\components\stickMenu\StickMenu::widget() ?>
<?= MainSection::widget() ?>
<?= GridSection::widget() ?>
<?= ProsSection::widget() ?>
<?= Pros2Section::widget() ?>
<?= FeedSection::widget() ?>
<?= LastSection::widget() ?>
<?= MapSection::widget() ?>
<?=\app\components\orderPopup\OrderPopup::widget() ?>
