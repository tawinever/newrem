<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 23.06.2016
 * Time: 22:08
 *
 */

//Current Google and Instagram feed Position

$iPos = 0;
$gPos = 0
?>
<section class="section-feed">
    <a href="<?=\yii\helpers\Url::toRoute('site/feedback')?>">
        <h2 class="ta-c">
            <span>33%</span> клиентов приходят к нам по рекомендации
        </h2>
    </a>
    <div class="feed-container">
            <div class="feed-bulk-container">
                <? if(count($instaFeeds) > $iPos && $iPos == 0):?>
                    <a href="<?=\yii\helpers\Url::toRoute('site/feedback')?>">
                        <h3> <i class="fa fa-instagram"></i> Отзывы Instagram:</h3>
                    </a>
                <?endif;?>
                <div class="instaPart">
                    <? if(isset($instaFeeds[$iPos])):?>
                        <div class="feed-item">
                            <?=$instaFeeds[$iPos]?>
                        </div>
                    <? $iPos++; endif;?>
                    <? if(isset($instaFeeds[$iPos])):?>
                        <div class="feed-item">
                            <?=$instaFeeds[$iPos]?>
                        </div>
                        <? $iPos++; endif;?>
                    <? if(isset($instaFeeds[$iPos])):?>
                        <div class="feed-item">
                            <?=$instaFeeds[$iPos]?>
                        </div>
                        <? $iPos++; endif;?>
                </div>


                <? if(count($googleFeeds) > $gPos && $gPos == 0):?>
                    <a href="<?=\yii\helpers\Url::toRoute('site/feedback')?>">
                        <h3> <i class="google"></i> Отзывы Google:</h3>
                    </a>
                <?endif;?>

                <div class="googlePart">
                    <? if(isset($googleFeeds[$gPos])):?>
                            <div class="google-review-container">
                                <?= $googleFeeds[$gPos]['text']?>
                                <div class="user-info">
                                    <div class="photo">
                                        <a href="https://www.google.kz/search?q=remonteka.&oq=remonteka.&aqs=chrome..69i57j69i60l4j69i65.2033j0j7&sourceid=chrome&ie=UTF-8#lrd=0x4245841f131a8a67:0xa8da8d58bf58cb9b,1,"><i class="google-icon"></i></a>
                                        <img src="<?=$googleFeeds[$gPos]['profile_photo_url']?>" alt="<?=$googleFeeds[$gPos]['author_name']?>">
                                    </div>
                                    <div class="about">
                                        <a href="<?=$googleFeeds[$gPos]['author_url']?>">
                                            <?=$googleFeeds[$gPos]['author_name'] ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    <? $gPos++; endif;?>

                    <? if(isset($googleFeeds[$gPos])):?>
                        <div class="google-review-container">
                            <?= $googleFeeds[$gPos]['text']?>
                            <div class="user-info">
                                <div class="photo">
                                    <a href="https://www.google.kz/search?q=remonteka.&oq=remonteka.&aqs=chrome..69i57j69i60l4j69i65.2033j0j7&sourceid=chrome&ie=UTF-8#lrd=0x4245841f131a8a67:0xa8da8d58bf58cb9b,1,"><i class="google-icon"></i></a>
                                    <img src="<?=$googleFeeds[$gPos]['profile_photo_url']?>" alt="<?=$googleFeeds[$gPos]['author_name']?>">
                                </div>
                                <div class="about">
                                    <a href="<?=$googleFeeds[$gPos]['author_url']?>">
                                        <?=$googleFeeds[$gPos]['author_name'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <? $gPos++; endif;?>
                </div>

            </div>
            <div class="feed-bulk-container">
                <div class="googlePart">
                    <? if(isset($googleFeeds[$gPos])):?>
                        <div class="google-review-container">
                            <?= $googleFeeds[$gPos]['text']?>
                            <div class="user-info">
                                <div class="photo">
                                    <a href="https://www.google.kz/search?q=remonteka.&oq=remonteka.&aqs=chrome..69i57j69i60l4j69i65.2033j0j7&sourceid=chrome&ie=UTF-8#lrd=0x4245841f131a8a67:0xa8da8d58bf58cb9b,1,"><i class="google-icon"></i></a>
                                    <img src="<?=$googleFeeds[$gPos]['profile_photo_url']?>" alt="<?=$googleFeeds[$gPos]['author_name']?>">
                                </div>
                                <div class="about">
                                    <a href="<?=$googleFeeds[$gPos]['author_url']?>">
                                        <?=$googleFeeds[$gPos]['author_name'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <? $gPos++; endif;?>

                    <? if(isset($googleFeeds[$gPos])):?>
                        <div class="google-review-container">
                            <?= $googleFeeds[$gPos]['text']?>
                            <div class="user-info">
                                <div class="photo">
                                    <a href="https://www.google.kz/search?q=remonteka.&oq=remonteka.&aqs=chrome..69i57j69i60l4j69i65.2033j0j7&sourceid=chrome&ie=UTF-8#lrd=0x4245841f131a8a67:0xa8da8d58bf58cb9b,1,"><i class="google-icon"></i></a>
                                    <img src="<?=$googleFeeds[$gPos]['profile_photo_url']?>" alt="<?=$googleFeeds[$gPos]['author_name']?>">
                                </div>
                                <div class="about">
                                    <a href="<?=$googleFeeds[$gPos]['author_url']?>">
                                        <?=$googleFeeds[$gPos]['author_name'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <? $gPos++; endif;?>
                </div>
            </div>
            <a href="<?=\yii\helpers\Url::toRoute('site/feedback')?>">
                <div class="button-container">
                    Больше отзывов
                </div>
            </a>
    </div>
</section>
