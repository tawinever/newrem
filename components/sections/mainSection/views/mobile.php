<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 11.07.2016
 * Time: 3:47
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
<section class="section-main ta-c">
    <div class="content-wrap">
        <h2 class="ta-c"><?=$copy['utp']->content ?></h2>
        <a href="<?= $calcUrl ?>" class="ctr-btn ctr-green">
            Узнать время и цену ремонта
        </a>
        <h3>или</h3>
        <a class="ctr-btn ctr-red  popup-open">
            Получить БЕСПЛАТНУЮ <br>консультацию
        </a>
    </div>

</section>
