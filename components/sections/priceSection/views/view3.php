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
            <div class="tab-header-container blue-border">
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
                        <table>
                            <tr>
                                <th>
                                    Тип ремонта
                                </th>
                                <?foreach($tabsAvailableDevices[$tabParentDevice] as $perDevice): ?>
                                <th>
                                    <?=$deviceDictionary[$perDevice]->title ?>
                                </th>
                                <?endforeach;?>
                                <th width="300px">Время ремонта</th>
                                <th width="160px"></th>
                            </tr>
                            <? foreach ($tabsAvailableRepairs[$tabParentDevice] as $perRepair):?>
                                <tr>
                                    <td><h3><?=$repairDictionary[$perRepair]->title?></h3></td>
                                    <? $tmpPrice = null;
                                    foreach ($tabsAvailableDevices[$tabParentDevice] as $perDevice):?>
                                        <td class="<?if(isset($prices[$perDevice][$perRepair][0]['price'])) echo 'popup-open price-cell';?>" data-order-info="<?=$deviceDictionary[$parent_device_id]->title?> - <?=$deviceDictionary[$tabParentDevice]->title ?> - <?=$deviceDictionary[$perDevice]->title ?> - <?=$repairDictionary[$perRepair]->title?>">
                                         <?
                                            if(isset($prices[$perDevice][$perRepair][0]['price'])){
                                                echo $prices[$perDevice][$perRepair][0]['price'];
                                                if(is_null($tmpPrice))
                                                    $tmpPrice = $prices[$perDevice][$perRepair][0]['info'];
                                            }
                                         ?>
                                        </td>
                                    <?endforeach;?>
                                    <td> <?=explode('|',$tmpPrice)[0].', '.explode('|',$tmpPrice)[1] ?></td>
                                    <td class="table-more popup-open" data-order-info="<?=$deviceDictionary[$parent_device_id]->title?> - <?=$deviceDictionary[$tabParentDevice]->title ?> - <?=$repairDictionary[$perRepair]->title?>">
                                        <span>Подробнее</span>
                                        <i class="fa fa-angle-right"></i>
                                    </td>
                                </tr>
                            <?endforeach;?>
                        </table>



                </div>
            <?endif;?>
        <?endforeach;?>
    </div>
</section>
