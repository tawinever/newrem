<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:06
 */

?>
<section class="section-pros">
    <h2 class="ta-c">Преимущества Ремонтеки</h2>
    <div class = "pros-container">
        <div class="pros-item">
            <div class="img">
                <img src="<?=$simpleData['imgOne']?>" alt="<?=$simpleData['titleThree']?>">
            </div>
            <span class="title ta-c">
                <?=$simpleData['titleOne']?>
            </span>
            <p class="full-text ta-c">
                <?=$simpleData['textOne'];?>
            </p>
        </div><div class="pros-item">
            <div class="img">
                <img src="<?=$simpleData['imgTwo']?>" alt="<?=$simpleData['titleThree']?>">
            </div>
            <span class="title ta-c">
                <?=$simpleData['titleTwo']?>

            </span>
            <p class="full-text ta-c">
                <?=$simpleData['textTwo'];?>

            </p>
        </div><div class="pros-item">
            <div class="img">
                <img src="<?=$simpleData['imgThree']?>" alt="<?=$simpleData['titleThree']?>">
            </div>
            <span class="title ta-c">
                <?=$simpleData['titleThree']?>

            </span>
            <p class="full-text ta-c">
                <?=$simpleData['textThree'];?>
            </p>
        </div>
        <div class="button-container">
            Подробнее
        </div>

    </div>
</section>

