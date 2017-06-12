<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 02.07.2016
 * Time: 3:54
 */
/** @var \app\models\Copyright[] $feedbacks */

$this->title = 'Отзывы Remonteka в Астане';

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Отзывы сервисного центра Remonteka по ремонту телефонов и ноутбуков  в Астане.  Срочный ремонт айфонов,  айпадов, планшетов, с гарантией  от 1 месяца. Низкие цены.'
]);

?>
<?= app\components\stickMenu\StickMenu::widget(['fixed' => true])?>

<?= app\components\sections\feedSection\FeedSection::widget(['mode' => 'asPage','page' => $page]);
