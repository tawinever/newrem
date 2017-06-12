<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:06
 */
use app\models\Page;
use yii\helpers\Url;
/** @var array $simpleData */
//$calcUrl = Url::toRoute('site/calc');
//if($page == 'home')
//    $calcUrl = Url::toRoute('site/calc');
//if($page == 'iphone')
//    $calcUrl = Url::toRoute('calc/'.'iPhone');
//if($page == 'android')
//    $calcUrl = Url::toRoute('calc/'.'Телефон');
//if($page == 'express')
//    $calcUrl = Url::toRoute('calc/'.'Express');
//if($page == 'ipad')
//    $calcUrl = Url::toRoute('calc/'.'iPad');
//if($page == 'macbook')
//    $calcUrl = Url::toRoute('calc/'.'Mac');
//if($page == 'notebook')
//    $calcUrl = Url::toRoute('calc/'.'Ноутбук');
?>
<section class="section-main">
    <video loop muted poster="<?=Yii::getAlias('@web')?>/img/<?=$simpleData['bgVideo']?>.jpg">
    </video>

    <nav class="clear-fix">
        <div class="logo left">
            <a href="<?= Url::to(['site/page', 'page' => Page::find()->where(['title' => 'home'])->one()])?>">
                <img src="<?=Yii::getAlias('@web')?>/img/logo.png" alt="Remonteka.kz">
            </a>
            <br>
            <h1>
            	<?=$simpleData['underLogo'];?>
            </h1>
        </div>
        <div class="info-container right">
            <div class="status">
                <span href="<?//= Url::toRoute('site/status'); ?>" class="gcw_title gcw_show_modal gcw_status_modal" data-id="gcw_status_modal">
                    Статус заказа
                </span>
            </div>
            <div class="contacts">
                <a href="tel:+77471236622" class="number">
                    <i class="image"></i>
                    +7 (747) 123 6622
                    <br>
                    <span class="number-sub">Пишите нам в WhatsApp</span>
                </a>
            </div><div class="schedule">
                <span>
                    С 10.00 до 20.00 Без Выходных
                </span>
                <br>
                <a href="https://2gis.kz/astana/query/Remonteka/firm/70000001021677246?queryState=center%2F71.421929%2C51.125731%2Fzoom%2F16" class="address" target="_blank">
                    г. Астана, Левый Берег <br>
                    ул. Достык 12/1
                </a>

            </div>
        </div>

    </nav>

    <div class="udp-container">
        <h2 class="main-utp"><?=$simpleData['utpMain'] ?></h2>
        <h2><?=$simpleData['utpSub']?></h2>

        <div class="ta-c">
            <a class="ctr-green ctr-btn nohover" href="<?= Url::toRoute($simpleData['calcUrl']) ?>">
                Узнать время и цену ремонта
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a class="ctr-red ctr-btn popup-open nohover">
                Получить БЕСПЛАТНУЮ диагностику
            </a>
        </div>
    </div>
</section>

