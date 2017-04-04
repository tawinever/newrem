<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/27/17
 * Time: 2:47 PM
 */?>

<h3 class="text-center text-capitalize">
    Справочник по SWD
</h3>

<? $cnt = 0; foreach ($widgets as $widget => $widget_name):?>
<div>

    <h5 style="border-bottom: 1px solid #fa7167; display: inline-block;cursor: pointer;" data-toggle="collapse" href="<?='#collapse'.$cnt?>" > <?=$widget_name?></h5>
    <div id="<?= 'collapse'.$cnt?>" class="collapse in">
        <? if(isset($store[$widget])): ?>
        <?foreach($store[$widget] as $field => $desc):?>
            <div style="font-weight: bold;font-size: 16px;">
                <?=$field?>
            </div>
            <div style="padding-left: 20px;">
                <?= $desc ?>
            </div>
        <?endforeach;?>
        <? else: ?>
        <div>
            Пока тут нет справки
        </div>

        <?endif;?>
    </div>

</div>

<? $cnt++; endforeach; ?>
