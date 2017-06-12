<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 20.07.2016
 * Time: 20:33
 */?>
<div class="contact-container">
    <div class="contact-left">
        <h1>
            <?=$title?>
        </h1>
        <h2>
            Наш адрес:
        </h2>
        <p class="ta-c">
            <span>
                г. Астана, Левый Берег <br>
            улица Достык, 12/1 <br>
            (Вход со стороны Мин Обороны)
            </span>

        </p>
        <div class="contact-map" id="section-map">
            <?if(\Yii::getAlias('@device') != 'mobile'):?>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=V5ehsyzS-yIbIWOMD6KKX6V30TifMxuM&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
            <?else:?>
                <a href="https://yandex.ru/maps/?um=constructor%3A7v9UZy6l9KKbqDWJQzxjYGX6UMntklE4&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A7v9UZy6l9KKbqDWJQzxjYGX6UMntklE4&amp;width=450&amp;height=400&amp;lang=ru_RU" alt="" style="border: 0;" /></a>
            <?endif;?>
        </div>
    </div>
    <div class="contact-right">
        <div class="contact-group">
            <h3>
                График работы:
            </h3>
            <p>
                <time itemprop="openingHours" datetime="Mo, Tu, We, Th, Fr 10:00?20:00">
                    Будни с 10.00 до 20.00
                </time>
                <br><br>
                <time itemprop="openingHours" datetime="Sa 10:00?20:00"> Выходные с 10.00 до 20.00</time>
            </p>

        </div>
        <div class="contact-group">
            <h3>
                Наши телефоны:
            </h3>
            <a href="tel:<?=Yii::$app->params['telephone_url']?>">
                <span itemprop="telephone" class="comagicPhoneGeneral"><?=Yii::$app->params['telephone_label']?></span>
            </a>
        </div>

        <div class="contact-group">
            <h3>
                E-mail:
            </h3>
            <a href="mailto:support@remonteka.kz">
                <span itemprop="email">support@remonteka.kz</span>
            </a>
        </div>
    </div>
</div>
