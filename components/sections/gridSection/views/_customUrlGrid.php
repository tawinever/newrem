<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 4/1/17
 * Time: 11:06 AM
 */?>

<div class="grid-item-container <?if($grid->type==2) echo 'double'?>">
    <a href="<?= explode('|',$grid->info)[0]?>" class="nohover">
        <div class="grid-item <?=$color[$grid->color]?>">
            <div class="item-title">
                <?= $grid->title;?>
            </div>

            <div class="item-subtitle">
                <?= $grid->subtitle;?>
            </div>

            <div class="<?if($grid->type == 2) echo 'side-image'; else echo 'down-image';?>">
                <img src="<?=$grid->image?>" alt="">
            </div>

            <?if
            ( $grid->type == 2):
                $infoAr = explode('|',$grid->info);
                unset($infoAr[0]);
                ?>
                <div class="info-container">
                    <?foreach ($infoAr as $info):?>
                        <div class="info-item">
                            <?=$info?>
                        </div>
                    <?endforeach;?>
                </div>
            <?endif;?>
        </div>
    </a>
</div>
