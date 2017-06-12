<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 24.06.2016
 * Time: 22:33
 */
use yii\helpers\Url; ?>
<section class="section-price">
    <div class="wrapper">
        <h2 class="ta-c title">Цены</h2>
        <table>
            <tr>
                <th>Тип ремонта</th>
                <th>Цена</th>
                <th>Детальная цена</th>
            </tr>
            <? foreach ($repairs as $repair): ?>
                <tr>
                    <td><h3><?= $repair->title ?></h3></td>

                    <?
                    $localMinPrice = 999999;

                    foreach ($devices as $device) {
                        if (array_key_exists($repair->id . '-' . $device->id, $mappedPrices)) {
                            if ($localMinPrice > $mappedPrices[$repair->id . '-' . $device->id]->price) {
                                $localMinPrice = $mappedPrices[$repair->id . '-' . $device->id]->price;
                            }
                        }
                    } ?>

                    <? if ($localMinPrice != 999999): ?>
                        <td class="popup-open">от <?= $localMinPrice ?>тг</td>
                    <? else: ?>
                        <td> -</td>
                    <? endif; ?>
                    <td data-role="info"><a href="<?= Url::toRoute('site/calc'); ?>"><u>Узнать детальную цену</u></a></td>
                </tr>
            <? endforeach; ?>


        </table>
    </div>
</section>
