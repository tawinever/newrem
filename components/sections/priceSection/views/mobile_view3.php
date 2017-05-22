<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 4/2/17
 * Time: 5:02 PM
 */
use yii\helpers\Url;


/** @var string $calcUrl */
/** @var string[] $tabParentDevices */
/** @var integer[][] $tabsAvailableDevices */
/** @var integer[][] $tabsAvailableRepairs */
/** @var \app\models\Device[] $deviceDictionary */
/** @var \app\models\Repair[] $repairDictionary */
/** @var integer $activeTab */
?>

<section class="section-price general">
    <div class="wrapper">
        <a href="<?= Url::toRoute($calcUrl)?>"><h2 class="ta-c title">Цены</h2></a>
        <div class="subtitle ta-c">
            Выберите модель устройства
        </div>
        <div class="ta-c">
            <div class="tab-header-container">
                <?foreach ($tabParentDevices as $tabParentDevice):?>
                    <? if(count($tabsAvailableDevices[$tabParentDevice]) > 0) :?>
                        <span class="<?if(isset($activeTab) && $activeTab == $tabParentDevice) echo 'active';?>" data-device="<?=$tabParentDevice?>"> <?= $deviceDictionary[$tabParentDevice]->title ?> </span>
                    <? endif;?>
                <?endforeach;?>
            </div>
        </div>


        <?foreach ($tabParentDevices as $tabParentDevice):?>
            <? if(count($tabsAvailableDevices[$tabParentDevice]) > 0) :?>
                <div class="tab-content-container <?if(isset($activeTab) && $activeTab == $tabParentDevice) echo 'active';?>" data-device="<?=$tabParentDevice?>">

                    <? foreach ($tabsAvailableRepairs[$tabParentDevice] as $perRepair):?>
                        <div class="tab-item popup-open" data-order-info="<?=$deviceDictionary[$parent_device_id]->title?> - <?=$deviceDictionary[$tabParentDevice]->title ?> - <?=$repairDictionary[$perRepair]->title?>">
                            <div class="tab-item-first">
                                <span class="name">
                                    <?=$repairDictionary[$perRepair]->title?>
                                </span>
                                <?
                                $tmpPrice = null; $lowestPrice = false;
                                foreach ($tabsAvailableDevices[$tabParentDevice] as $perDevice) {
                                    if(isset($prices[$perDevice][$perRepair][0]['price'])){
                                        if(!$lowestPrice) $lowestPrice = $prices[$perDevice][$perRepair][0]['price'];
                                        if($lowestPrice > $prices[$perDevice][$perRepair][0]['price']) $lowestPrice = $prices[$perDevice][$perRepair][0]['price'];
                                        if (is_null($tmpPrice))
                                            $tmpPrice = $prices[$perDevice][$perRepair][0]['info'];
                                    }
                                }
                                ?>
                                <span class="duration">
                                    <?=explode('|',$tmpPrice)[0]?>
                                </span>
                                 <span class="price">
                                    от <?=$lowestPrice?> тг
                                </span>
                            </div>
                        </div>
                    <?endforeach;?>







                </div>
            <?endif;?>
        <?endforeach;?>
    </div>
</section>
