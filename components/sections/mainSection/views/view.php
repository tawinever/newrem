<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:06
 */
use yii\helpers\Url;

$calcUrl = Url::toRoute('site/calc');
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
<section class="section-main">
    <video loop muted poster="<?=Yii::getAlias('@web')?>/img/<?=$bgVideo?>.jpg">
    </video>

    <nav class="clear-fix">
        <div class="logo left">
        <a href="<?= Url::toRoute('site/index'); ?>">
            <img src="<?=Yii::getAlias('@web')?>/img/logo.png" alt="Remonteka.kz">
        </a>
        <br>
            <h1>
                <?=$this->title?>
            </h1>
        </div>
        <div class="info-container right">
            <div class="status">
                <a href="<?= Url::toRoute('site/status'); ?>">
                    Статус заказа
                </a>
            </div>
            <div class="contacts">
                <a href="tel:+77021236622" class="number">
                    <i class="image">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455.731 455.731">
                            <g>
                                <path style="fill:#6cc644;" d="M68.494,387.41l22.323-79.284c-14.355-24.387-21.913-52.134-21.913-80.638
                                    c0-87.765,71.402-159.167,159.167-159.167s159.166,71.402,159.166,159.167c0,87.765-71.401,159.167-159.166,159.167
                                    c-27.347,0-54.125-7-77.814-20.292L68.494,387.41z M154.437,337.406l4.872,2.975c20.654,12.609,44.432,19.274,68.762,19.274
                                    c72.877,0,132.166-59.29,132.166-132.167S300.948,95.321,228.071,95.321S95.904,154.611,95.904,227.488
                                    c0,25.393,7.217,50.052,20.869,71.311l3.281,5.109l-12.855,45.658L154.437,337.406z"/>
                                <path style="fill:#6cc644;" d="M183.359,153.407l-10.328-0.563c-3.244-0.177-6.426,0.907-8.878,3.037
                                    c-5.007,4.348-13.013,12.754-15.472,23.708c-3.667,16.333,2,36.333,16.667,56.333c14.667,20,42,52,90.333,65.667
                                    c15.575,4.404,27.827,1.435,37.28-4.612c7.487-4.789,12.648-12.476,14.508-21.166l1.649-7.702c0.524-2.448-0.719-4.932-2.993-5.98
                                    l-34.905-16.089c-2.266-1.044-4.953-0.384-6.477,1.591l-13.703,17.764c-1.035,1.342-2.807,1.874-4.407,1.312
                                    c-9.384-3.298-40.818-16.463-58.066-49.687c-0.748-1.441-0.562-3.19,0.499-4.419l13.096-15.15
                                    c1.338-1.547,1.676-3.722,0.872-5.602l-15.046-35.201C187.187,154.774,185.392,153.518,183.359,153.407z"/>
                            </g>
                        </svg>
                    </i>
                    +7 (702) 123 6622
                </a>
                <br>
                <a href="https://2gis.kz/astana/query/Remonteka/firm/70000001021677246?queryState=center%2F71.421929%2C51.125731%2Fzoom%2F16" class="address" target="_blank">
                    г. Астана, Левый Берег <br>
                    ул. Достык 12/1
                </a>

            </div><div class="schedule">
                <span>
                    Будни с 10.00 до 20.00
                </span>
                <br>
                <span>
                    Выходные с 10.00 до 20.00
                </span>

            </div>
        </div>

    </nav>

    <div class="udp-container">
        <h2 class="main-utp"><?=$copy['utp']->content ?></h2>
        <h2><?=$copy['utp-2']->content ?></h2>

        <div class="ta-c">
            <a class="ctr-green ctr-btn" href="<?= $calcUrl ?>">
                Узнать время и цену ремонта
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a class="ctr-red ctr-btn popup-open">
                Получить БЕСПЛАТНУЮ диагностику
            </a>
        </div>
    </div>
</section>

