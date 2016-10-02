<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 23.06.2016
 * Time: 22:43
 */
use yii\helpers\Url;
$calcUrl = "";
if($page == 'home')
    $calcUrl = Url::toRoute('site/calc');
if($page == 'iphone')
    $calcUrl = Url::toRoute('calc/'.'iPhone');
if($page == 'android')
    $calcUrl = Url::toRoute('calc/'.'Телефон');
if($page == 'express')
    $calcUrl = Url::toRoute('calc/'.'Express');
if($page == 'ipad')
    $calcUrl = Url::toRoute('calc/'.'iPad');
if($page == 'macbook')
    $calcUrl = Url::toRoute('calc/'.'Mac');
if($page == 'notebook')
    $calcUrl = Url::toRoute('calc/'.'Ноутбук');
?>
<section class = "section-last">
    <h2 class="ta-c">
        Выложите фото с Remonteka в <a href="https://www.instagram.com/remonteka.kz/"><u>инстаграм</u></a> и получите
        <?if($page = 'macbook'):?>
        5% скидку
        <?else:?>
        защитное стекло бесплатно
        <?endif;?>
    </h2>
    <div class="ta-c">
        <a href="<?= $calcUrl ?>" class="ctr-btn ctr-green"> Узнать время и цену ремонта</a>
        <span>или</span>
        <a class="ctr-btn ctr-red popup-open"> Заказать звонок</a>
    </div>
</section>

