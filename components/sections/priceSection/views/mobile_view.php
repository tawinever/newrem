<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 24.06.2016
 * Time: 22:33
 */

use yii\helpers\Url;

$addUrl = "";
$addTab = "";
if(isset($simpleData['addTab'])){
    $addTab = explode('|',$simpleData['addTab'])[0];
    $addUrl = explode('|',$simpleData['addTab'])[1];
}

?>

<section class="section-price general">
    <div class="wrapper">
        <a href="<?= Url::toRoute($calcUrl)?>"><h2 class="ta-c title">Цены</h2></a>
        <div class="subtitle ta-c">
            Выберите модель устройства
        </div>
        <div class="ta-c">
            <div class="tab-header-container">
                <?foreach ($prices as $device_id => $repairs):?>
                    <span class="<?if(isset($activeTab) && $activeTab == $device_id) echo 'active';?>" data-device="<?=$device_id?>"> <?= $deviceDictionary[$device_id]->title ?> </span>
                <?endforeach;?>
                <?if(isset($simpleData['addTab'])):?>
                    <span>
                    <a href="<?=explode('|',$simpleData['addTab'])[1]?>">
                        <?=explode('|',$simpleData['addTab'])[0]?>
                    </a>
                </span>
                <?endif;?>

            </div>
        </div>

        <?foreach ($prices as $device_id => $rowPrices):?>
            <div class="tab-content-container <?if(isset($activeTab) && $activeTab == $device_id) echo 'active';?>" data-device="<?=$device_id?>">
                <?foreach ($rowPrices as $rowPrice) :?>
                    <div class="tab-item popup-open" data-order-info="<?= $deviceDictionary[$parent_device_id]->title ?> - <?= $deviceDictionary[$device_id]->title ?>" data-info="<?=explode('|',$rowPrice['info'])[0].', '.explode('|',$rowPrice['info'])[1] ?>">
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
