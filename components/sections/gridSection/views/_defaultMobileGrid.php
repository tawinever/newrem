<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 4/1/17
 * Time: 11:05 AM
 */?>
<div class="grid-item-container <?if($grid->type==2) echo 'double'?>">
    <a href="<?= $grid->page->url?>" class="nohover">
        <div class="grid-item <?=$color[$grid->color]?>">
            <div class="item-text">
                <div class="item-title">
                    <?= $grid->title;?>
                </div>

                <div class="item-subtitle">
                    <?= $grid->subtitle;?>
                </div>
            </div>
            <div class="side-image">
                <img src="<?=$grid->image?>" alt=" ">
            </div>
        </div>
    </a>
</div>
