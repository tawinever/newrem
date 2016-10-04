    <?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 24.06.2016
 * Time: 22:33
 */ ?>
<section class="section-price">
    <div class="wrapper">
        <h2 class="ta-c title">Цены</h2>
        <table>
            <tr>
                <th>Тип ремонта</th>
                <? foreach ($devices as $device): ?>
                    <th><h3><?=$category->title.' '.$device->title ?></h3></th>
                <?endforeach;?>
                <th width="300px">Время ремонта</th>
                <th >Заказать <br> Ремонт</th>
            </tr>
            <?foreach ($repairs as $repair ): ?>
                <tr>
                    <td><h3><?=$repair->title?></h3></td>

                    <? foreach ($devices as $device): ?>
                        <?if(array_key_exists($repair->id.'-'.$device->id,$mappedPrices)): ?>
                            <td class = "popup-open" data-order-info="<?=$category->title.' '.$device->title.' - '.$repair->title.' - '.$mappedPrices[$repair->id.'-'.$device->id]->price.' тг'?>" data-role="price" data-info="<?=$mappedPrices[$repair->id.'-'.$device->id]->info?>"><?=$mappedPrices[$repair->id.'-'.$device->id]->price?> тг</td>
                        <?else:?>
                            <td> - </td>
                        <?endif;?>
                    <?endforeach;?>
                    <td data-role="info">Наведите на желаемую цену</td>
                    <td class="ta-r"><button class="popup-open ctr-btn ctr-green" data-order-info="<?=$category->title.' - '.$repair->title?>" data-info="<?=$mappedPrices[$repair->id.'-'.$device->id]->info?>"> Заказать</button></td>
                </tr>    
            <?endforeach; ?>

            

        </table>
    </div>
</section>
