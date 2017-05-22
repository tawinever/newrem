<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 5/16/17
 * Time: 5:45 PM
 */
use app\models\Page;
use yii\helpers\Url; ?>

<section class="section-main">
    <div class="first-part">
        <a href="<?= Url::to(['site/page', 'page' => Page::find()->where(['title' => 'home'])->one()])?>">
            <img src="<?=Yii::getAlias('@web')?>/img/dark-logo.png" alt="Remonteka.kz">
        </a>
        <br>
        <h1>
            <?=$this->title?>
        </h1>
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

    <div class="third-part">
        <div class="third-part-inner">
            <h2><?=$simpleData['utpMain']?></h2>
            <h3><?=$simpleData['utpSub']?></h3>

            <a class="ctr-blue ctr-btn nohover" href="<?= Url::toRoute($simpleData['calcUrl']) ?>">
                Цена Вашего Ремонта
            </a>
        </div>

    </div>
</section>
