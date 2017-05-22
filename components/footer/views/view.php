<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 23.06.2016
 * Time: 23:26
 */
use yii\helpers\Url; ?>
<footer>
    <div class="first">
        <div class="col flex-one">
            <span class="title">График работы</span>
            <span>пн-вс 10:00 - 20:00</span>
            <span class="title" style="margin-top: 30px">Прием заявок</span>
            <span>пн-пт 09:30-20:30</span>
            <span>сб 09:30-20:30</span>
            <span>вс 09:30-20:30</span>
        </div>
        <div class="col flex-two">
            <span class="title">Наши другие услуги</span>
            <span><a href="<?= Url::toRoute('site/iphone'); ?>"><h3>Ремонт Айфонов</h3></a></span>
            <span><a href="<?= Url::toRoute('site/ipad'); ?>"><h3>Ремонт Айпадов</h3></a></span>
            <span><a href="<?= Url::toRoute('site/android'); ?>"><h3>Ремонт других телефонов</h3></a></span>
            <span><a href="<?= Url::toRoute('site/notebook'); ?>"><h3>Ремонт ноутбуков</h3></a></span>
            <span><a href="<?= Url::toRoute('site/macbook'); ?>"><h3>Ремонт Макбуков</h3></a></span>
            <span><a href="<?= Url::toRoute('site/express'); ?>"><h3>Ремонт на выезд</h3></a></span>
            <span class="gcw_title gcw_show_modal gcw_status_modal" data-id="gcw_status_modal"><h3>Статус заказа</h3></span>
        </div>
        <div class="col flex-two">
            <span class="title"><a href="<?=Url::toRoute('site/contact')?>">Контакты</a></span>
           <span>
               <a href="https://2gis.kz/astana/query/Remonteka/firm/70000001021677246?queryState=center%2F71.421929%2C51.125731%2Fzoom%2F16">
               <div class="image">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 255.856 255.856" width="100%">
                    <g>
                        <path
                            d="M127.928,38.8c-30.75,0-55.768,25.017-55.768,55.767s25.018,55.767,55.768,55.767   s55.768-25.017,55.768-55.767S158.678,38.8,127.928,38.8z M127.928,135.333c-22.479,0-40.768-18.288-40.768-40.767   S105.449,53.8,127.928,53.8s40.768,18.288,40.768,40.767S150.408,135.333,127.928,135.333z"
                            fill="#FFFFFF"/>
                        <path
                            d="M127.928,0C75.784,0,33.362,42.422,33.362,94.566c0,30.072,25.22,74.875,40.253,98.904   c9.891,15.809,20.52,30.855,29.928,42.365c15.101,18.474,20.506,20.02,24.386,20.02c3.938,0,9.041-1.547,24.095-20.031   c9.429-11.579,20.063-26.616,29.944-42.342c15.136-24.088,40.527-68.971,40.527-98.917C222.495,42.422,180.073,0,127.928,0z    M171.569,181.803c-19.396,31.483-37.203,52.757-43.73,58.188c-6.561-5.264-24.079-26.032-43.746-58.089   c-22.707-37.015-35.73-68.848-35.73-87.336C48.362,50.693,84.055,15,127.928,15c43.873,0,79.566,35.693,79.566,79.566   C207.495,112.948,194.4,144.744,171.569,181.803z"
                            fill="#FFFFFF"/>
                    </g>
                    </svg>
               </div>
                    <address>
                        <p>Ремонт Айфон Макбук Ремонтека</p>
                        <p>010000, Астана</p>
                        <p>ул. Достык, 12/1</p>
                        <p>Казахстан</p>
                    </address>
               (Вход со стороны Мин Обороны)</a>
           </span>
           <span>
               <a href="tel:<?=Yii::$app->params['telephone_url']?>">
               <div class="image">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455.731 455.731">
                        <g>
                            <rect style="fill:#1BD741;"/>
                            <g>
                                <path style="fill:#FFFFFF;" d="M68.494,387.41l22.323-79.284c-14.355-24.387-21.913-52.134-21.913-80.638
                                    c0-87.765,71.402-159.167,159.167-159.167s159.166,71.402,159.166,159.167c0,87.765-71.401,159.167-159.166,159.167
                                    c-27.347,0-54.125-7-77.814-20.292L68.494,387.41z M154.437,337.406l4.872,2.975c20.654,12.609,44.432,19.274,68.762,19.274
                                    c72.877,0,132.166-59.29,132.166-132.167S300.948,95.321,228.071,95.321S95.904,154.611,95.904,227.488
                                    c0,25.393,7.217,50.052,20.869,71.311l3.281,5.109l-12.855,45.658L154.437,337.406z"/>
                                <path style="fill:#FFFFFF;" d="M183.359,153.407l-10.328-0.563c-3.244-0.177-6.426,0.907-8.878,3.037
                                    c-5.007,4.348-13.013,12.754-15.472,23.708c-3.667,16.333,2,36.333,16.667,56.333c14.667,20,42,52,90.333,65.667
                                    c15.575,4.404,27.827,1.435,37.28-4.612c7.487-4.789,12.648-12.476,14.508-21.166l1.649-7.702c0.524-2.448-0.719-4.932-2.993-5.98
                                    l-34.905-16.089c-2.266-1.044-4.953-0.384-6.477,1.591l-13.703,17.764c-1.035,1.342-2.807,1.874-4.407,1.312
                                    c-9.384-3.298-40.818-16.463-58.066-49.687c-0.748-1.441-0.562-3.19,0.499-4.419l13.096-15.15
                                    c1.338-1.547,1.676-3.722,0.872-5.602l-15.046-35.201C187.187,154.774,185.392,153.518,183.359,153.407z"/>
                            </g>
                        </g>
                    </svg>
               </div>
               <?=Yii::$app->params['telephone_label']?></a>
           </span>
            <span><a href="mailto:support@remonteka.kz">support@remonteka.kz</a></span>

        </div>
    </div>
    <div class="first">
        <div class="socials">
            <span class="title ta-c">Понравился проект?</span>
            <div>
                <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"
                        charset="utf-8"></script>
                <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                <div class="ya-share2"
                     data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,viber,whatsapp"
                     data-title="Легкий и быстрый способ ремонта вашего телефона и ноутбука"
                     data-description="Срочный ремонт вашего телефона, ноутбука 80% ремонтов выполняется на ваших глазах в течении 40 минут."
                     data-image="<?= Yii::getAlias('@web') ?>/img/social.jpg"
                >

                </div>
            </div>
        </div>
    </div>
    <div class="second">
        <span>
            Сделано с <i style="color: #f97167;font-size: 20px;line-height: 0">♥</i> в Астане
        </span>
        <span>
            <a href="<?=Url::toRoute('site/policy')?>">
                Политика конфиденциальности
            </a>
        </span>
        <span>
            © <?= date('Y') ?> Ремонтека Все права защищены.
        </span>
    </div>

</footer>
