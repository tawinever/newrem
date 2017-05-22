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
        <?foreach ($prices as $device_id => $rowPrices):?>
            <div class="tab-content-container <?if(isset($activeTab) && $activeTab == $device_id) echo 'active';?>" data-device="<?=$device_id?>">
                <?foreach ($rowPrices as $rowPrice) :?>
                    <div class="tab-item popup-open" data-order-info="<?= $deviceDictionary[$deviceDictionary[$parent_device_id]->parent_id]->title ?> <?= $deviceDictionary[$device_id]->title ?> <?= $repairDictionary[$rowPrice['repair_id']]->title ?>" data-info="<?=explode('|',$rowPrice['info'])[0].', '.explode('|',$rowPrice['info'])[1] ?>">
                        <div class="tab-item-first">
                            <span class="name">
                                <?= $repairDictionary[$rowPrice['repair_id']]->title ?>
                            </span>
                            <span class="duration">
                                <?= explode('|',$rowPrice['info'])[0]  ?>
                            </span>
                            <span class="price">
                                <?= $rowPrice['price'].' тг.' ?>
                            </span>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        <?endforeach;?>
    </div>
</section>