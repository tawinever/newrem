    <?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 24.06.2016
 * Time: 22:33
 */
/** @var \app\models\Price[] $prices */

    use yii\helpers\Url;

    $calcUrl = Url::toRoute('site/calc');
?>
<section class="section-price">
    <div class="wrapper">
        <a href="<?= $calcUrl ?>"><h2 class="ta-c title">Цены</h2></a>
        <table>
            <tr>
                <th>Устройство</th>
                <th width="300px">Цена</th>
                <th >Время</th>
                <th >Заказать</th>
            </tr>
            <?
            $prices = \app\helpers\Comparator::sortSimplePrice($prices);
            foreach ($prices as $price ): ?>
                <?if($price->device->category->title !== 'Телефон'):?>
                    <tr>
                        <td><h3><?=$price->device->category->title.' - '.$price->device->title?></h3></td>
                        <td><?= $price->price ?> тг</td>
                        <td><?= $price->info ?></td>
                        <td class="ta-r"><button class="popup-open ctr-btn ctr-green" data-order-info="<?=$price->device->category->title.' - '.$price->device->title.' - Замена стекло'?>"> Заказать</button></td>
                    </tr>
                <?endif;?>

            <?endforeach; ?>
        </table>
    </div>
</section>
