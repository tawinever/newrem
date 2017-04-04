<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:06
 */

?>
<section class="section-pros2">
    <div class="pros-container">
        <div class="pros-item">
            <div class="image-container">
                <div class="nav-left" id="pros2left1">
                </div>
                <div class="nav-right" id="pros2right1">
                </div>
                <div class="image">
                    <ul class="bxslider" id="prosSlider1">
                        <?
                            $pics = explode('|',$simpleData['imgOne']);
                            foreach ($pics as $pic):
                        ?>
                        <li>
                            <a href="<?=Yii::getAlias('@web')?>/img/pros/<?=$pic?>" data-fancybox="pros1" data-caption="<?=$simpleData['titleOne']?>" >
                                <img src="<?=Yii::getAlias('@web')?>/img/pros/thumb/<?=$pic?>" />
                            </a>
                        </li>
                        <?endforeach;?>
                    </ul>
                </div>

            </div><div class="info">
                <div class="title"><?=$simpleData['titleOne']?></div>
                <p>
                    <?=$simpleData['textOne']?>
                </p>
            </div>
        </div>

        <div class="pros-item">

            <div class="info">
                <div class="title"><?=$simpleData['titleTwo']?></div>
                <p>
                    <?=$simpleData['textTwo']?>
                </p>
            </div><div class="image-container even">
                <div class="nav-left" id="pros2left2">
                </div>
                <div class="nav-right" id="pros2right2">
                </div>
                <div class="image">
                    <ul class="bxslider" id="prosSlider2">
                        <?
                        $pics = explode('|',$simpleData['imgTwo']);
                        foreach ($pics as $pic):
                            ?>
                            <li>
                                <a href="<?=Yii::getAlias('@web')?>/img/pros/<?=$pic?>" data-fancybox="pros2" data-caption="<?=$simpleData['titleTwo']?>" >
                                    <img src="<?=Yii::getAlias('@web')?>/img/pros/thumb/<?=$pic?>" />
                                </a>
                            </li>
                        <?endforeach;?>
                    </ul>
                </div>

            </div>
        </div>

        <div class="pros-item">
            <div class="image-container">
                <div class="nav-left" id="pros2left3">
                </div>
                <div class="nav-right" id="pros2right3">
                </div>
                <div class="image">
                    <ul class="bxslider" id="prosSlider3">
                        <?
                        $pics = explode('|',$simpleData['imgThree']);
                        foreach ($pics as $pic):
                            ?>
                            <li>
                                <a href="<?=Yii::getAlias('@web')?>/img/pros/<?=$pic?>" data-fancybox="pros3" data-caption="<?=$simpleData['titleThree']?>" >
                                    <img src="<?=Yii::getAlias('@web')?>/img/pros/thumb/<?=$pic?>" />
                                </a>
                            </li>
                        <?endforeach;?>
                    </ul>
                </div>

            </div><div class="info">
                <div class="title"><?=$simpleData['titleThree']?></div>
                <p>
                    <?=$simpleData['textThree']?>
                </p>
            </div>
        </div>
    </div>
</section>

