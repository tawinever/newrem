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


            <div class="googlePart">
                <? if(count($googleFeeds) > $gPos && $gPos == 0):?>
                    <a href="<?=\yii\helpers\Url::toRoute('site/feedback')?>">
                        <h3> <i class="google"></i><br> О нас в Google</h3>
                    </a>
                <?endif;?>
                <?while(true):?>
                <? if(isset($googleFeeds[$gPos])):?>
                    <div class="google-review-container">
                        <div class="user-info">
                            <div class="photo">
                                <a href="<?=$googleFeeds[$gPos]['author_url']?>">
                                    <img src="<?=$googleFeeds[$gPos]['profile_photo_url']?>" alt="<?=$googleFeeds[$gPos]['author_name']?>">
                                </a>
                            </div>
                            <div class="about">
                                <a href="<?=$googleFeeds[$gPos]['author_url']?>">
                                    <?=$googleFeeds[$gPos]['author_name'] ?>
                                </a>
                            </div>
                        </div>
                        <div class="text">
                            <?= $googleFeeds[$gPos]['text']?>
                        </div>
                    </div>
                <? $gPos++; else:?>
                    <?break;?>
                    <?endif;?>
                <?endwhile;?>
            </div>
        </div>
    </div>
</section>
