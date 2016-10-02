<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 13.07.2016
 * Time: 2:57
 */
use yii\helpers\Url; ?>
<section class="section-grid">
    <h2 class="ta-c"><a href="<?=Url::toRoute('site/calc')?>">Найти свое устройство</a></h2>
    <div class="mosaic-container">
        <div class="mosaic-row">
            <div class="mosaic-item mosaic-1">
                <a href="<?= Url::toRoute('site/iphone'); ?>"><h3>Айфон</h3></a>
            </div>
            <div class="mosaic-item mosaic-2">
                <a href="<?= Url::toRoute('site/android'); ?>"><h3>Android телефоны</h3></a>
            </div>
        </div>
        <div class="mosaic-row">
            <div class="mosaic-item mosaic-4">
                <a href="<?= Url::toRoute('site/notebook'); ?>"><h3>Ноутбук</h3></a>
            </div>
            <div class="mosaic-item mosaic-6">
                <a href="<?= Url::toRoute('site/macbook'); ?>"><h3>Макбуки</h3></a>
            </div>
        </div>
        <div class="mosaic-row">
            <div class="mosaic-item mosaic-8">
                <a href="<?= Url::toRoute('site/express'); ?>"><h3>Ремонт <br>на выезд</h3></a>
            </div>
            <div class="mosaic-item mosaic-3">
                <a href="<?= Url::toRoute('site/ipad'); ?>"><h3>Айпад</h3></a>
            </div>
        </div>
    </div>
</section>
