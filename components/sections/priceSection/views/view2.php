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
        <div class="tab-header-container">
            <div class="tab-header-first">
                <span class="name">
                    Тип ремонта
                </span>
                <span class="price">
                    Цена
                </span>
                <span class="duration">
                    Время ремонта
                </span>
                <span class="description">
                    Описание
                </span>
            </div>

        </div>
        <?foreach ($prices as $device_id => $rowPrices):?>
            <div class="tab-content-container <?if(isset($activeTab) && $activeTab == $device_id) echo 'active';?>" data-device="<?=$device_id?>">
                	<div class="tab-item">
                        <div class="tab-item-first">
                            <span class="name">
                            	Диагностика
                            </span>
                            <span class="price">
                            	Бесплатно
                            </span>
                            <span class="duration">
                                15 минут
                            </span>
                            <span class="description">
                            </span>
                        </div>

                        <div class="tab-item-second popup-open" data-order-info="<?= $deviceDictionary[$deviceDictionary[$parent_device_id]->parent_id]->title ?> - <?= $deviceDictionary[$device_id]->title ?> - Диагностика">
                            <span>
                                Заказать
                            </span>
                        </div>


                    </div>
                <?foreach ($rowPrices as $rowPrice) :?>
                    <div class="tab-item">
                        <div class="tab-item-first">
                            <span class="name">
                                <?= $repairDictionary[$rowPrice['repair_id']]->title ?>
                            </span>
                            <span class="price">
                                <?= $rowPrice['price'].' тг.' ?>
                            </span>
                            <span class="duration">
                                <?= explode('|',$rowPrice['info'])[0]  ?>

                            </span>
                            <span class="description">
                                <?= explode('|',$rowPrice['info'])[1]  ?>
                            </span>
                        </div>

                        <div class="tab-item-second popup-open" data-order-info="<?= $deviceDictionary[$deviceDictionary[$parent_device_id]->parent_id]->title ?> - <?= $deviceDictionary[$device_id]->title ?>" data-info="<?=explode('|',$rowPrice['info'])[0].', '.explode('|',$rowPrice['info'])[1] ?>">
                            <span>
                                Заказать
                            </span>
                        </div>


                    </div>
                <?endforeach;?>
            </div>
        <?endforeach;?>
    </div>
</section>