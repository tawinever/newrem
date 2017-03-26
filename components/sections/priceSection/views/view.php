    <?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 24.06.2016
 * Time: 22:33
 */

    use yii\helpers\Url;

    $calcUrl = "";
    if($page == 'home')
        $calcUrl = Url::toRoute('site/calc');
    if($page == 'iphone')
        $calcUrl = Url::toRoute('calc/'.'iPhone');
    if($page == 'android')
        $calcUrl = Url::toRoute('calc/'.'Телефон');
    if($page == 'express')
        $calcUrl = Url::toRoute('calc/'.'Express');
    if($page == 'ipad')
        $calcUrl = Url::toRoute('calc/'.'iPad');
    if($page == 'macbook')
        $calcUrl = Url::toRoute('calc/'.'Mac');
    if($page == 'notebook')
        $calcUrl = Url::toRoute('calc/w'.'Ноутбук');
?>
<section class="section-price">
    <div class="wrapper">
        <a href="<?= $calcUrl ?>"><h2 class="ta-c title">Цены</h2></a>
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
