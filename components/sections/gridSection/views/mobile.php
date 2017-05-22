<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:06
 */
use app\components\sections\gridSection\GridSection;
use yii\helpers\Url;

$grids = array_slice($grids,0,5);
?>
<section class="section-grid">
    <div class="mosaic-container">
        <? foreach($grids as $grid){
            switch ($gridDictionary[$grid->id]) {
                case GridSection::GRID_TYPE[0]:
                    echo $this->render('_defaultMobileGrid', ['grid' => $grid,'color' => $color]);
                    break;
                case GridSection::GRID_TYPE[1]:
                    echo $this->render('_customUrlGrid', ['grid' => $grid,'color' => $color]);
                    break;
                case GridSection::GRID_TYPE[2]:
                    echo $this->render('_ctaGrid', ['grid' => $grid,'color' => $color]);
                    break;
            }

        } ?>

    </div>
</section>

