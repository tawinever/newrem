<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 5/16/17
 * Time: 5:45 PM
 */
use app\models\Page;
use yii\helpers\Url; ?>

<section class="section-main hidden mobile-menu">
    <div class="first-part">
        <a class="ctr-blue ctr-btn popup-open nohover">
            <span class="tv-middle">Оформить заявку</span>
            <i class="fa fa-pencil"></i>
        </a>
    </div>
    <div class="second-part">
        <a href="tel:<?= Yii::$app->params['telephone_url'] ?>">
            <i class="fa fa-mobile-phone"></i>
            <?= Yii::$app->params['telephone_label'] ?>
        </a>
        <a href="<?=Yii::$app->params['map_url']?>">
            <i class="fa fa-map-marker"></i>
            Адрес
        </a>
    </div>
</section>
