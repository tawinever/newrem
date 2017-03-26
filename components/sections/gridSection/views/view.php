<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:06
 */
use yii\helpers\Url;

?>
<section class="section-grid">
    <h2 class="ta-c"><a href="<?=Url::toRoute('site/calc')?>"><?=$copy['title']->content ?></a></h2>
    <div class="mosaic-container">
        <div class="mosaic-row">
            <div class="mosaic-item mosaic-1">
                <a href="<?= Url::toRoute('site/iphone'); ?>"><h3>Айфон</h3></a>
            </div>
            <div class="mosaic-item mosaic-2">
                <a href="<?= Url::toRoute('site/android'); ?>"><h3>Android телефоны</h3></a>
            </div>
            <div class="mosaic-item mosaic-3">
                <a href="<?= Url::toRoute('site/ipad'); ?>"><h3>Айпад</h3></a>
            </div>
        </div>
        <div class="mosaic-row">
            <div class="mosaic-item mosaic-4">
                <a href="<?= Url::toRoute('site/notebook'); ?>"><h3>Ноутбуки</h3></a>
            </div>
            <div class="mosaic-item mosaic-5">
                <a href="<?=\yii\helpers\Url::toRoute('site/feedback')?>">
                    Уже отремонтировано <br>
                    <u><?=round((time()/(24 * 60 * 60) - 16832)*12) ?></u><br>
                    устройств <br>
                </a>
            </div>
            <div class="mosaic-item mosaic-6">
                <a href="<?= Url::toRoute('site/macbook'); ?>"><h3>Макбук</h3></a>
            </div>
        </div>
        <div class="mosaic-row">
            <div class="mosaic-item mosaic-7">
                <a href="<?= Url::toRoute('site/calc'); ?>">
                    <u>Узнать время и цену <br>
                    ремонта</u>
                </a>
            </div>
            <div class="mosaic-item mosaic-8">
                <a href="<?= Url::toRoute('site/express'); ?>"><h3>Ремонт на выезд</h3></a>
            </div>
            <div class="mosaic-item mosaic-9">
                <a class="popup-open">
                    <u>Получить БЕСПЛАТНУЮ <br>
                    консультацию</u>
                </a>
            </div>
        </div>
    </div>
</section>

