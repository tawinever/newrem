<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/28/17
 * Time: 12:24 AM
 */

use yii\helpers\Url;

?>

<section class="section-price trivial">
    <div class="wrapper">
        <a href="<?= Url::toRoute($calcUrl)?>"><h2 class="ta-c title">Цены</h2></a>
        <div class="tab-content-container active">
            <?foreach ($deviceAr as $device) :?>
                <?if(isset($prices[$device])):?>
                <div class="tab-item popup-open" data-order-info="<?= $deviceDictionary[$deviceDictionary[$device]->parent_id]->title ?> <?= $deviceDictionary[$device]->title ?> <?= $repair->title ?>">
                    <div class="tab-item-first">
                        <span class="name">
                            <?= $deviceDictionary[$device]->title ?>
                        </span>
                        <span class="price">
                            <?= $prices[$device][0]['price'].' тг.' ?>
                        </span>
                        <span class="duration">
                            <?= explode('|',$prices[$device][0]['info'])[0]  ?>
                        </span>
                    </div>
                </div>
                <?endif;?>
            <?endforeach;?>
        </div>
    </div>
</section>