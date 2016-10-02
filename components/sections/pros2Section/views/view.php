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
            <div class="image">
                <img src="<?=Yii::getAlias('@web')?>/img/pros/1.jpg" alt="Профессиональные оборудование">
            </div><div class="info">
                <div class="title">Профессиональное оборудование</div>
                <p>
                    <?=$copy['text-4']->content;?>
                </p>
            </div>
        </div>
        <div class="pros-item">
            <div class="info">
                <div class="title">Запчасти оригинального класса</div>
                <p>
                    <?=$copy['text-5']->content;?>
                </p>
            </div><div class="image even">
                <img src="<?=Yii::getAlias('@web')?>/img/pros/2.jpg" alt="Запчасти оригинального класса">
            </div>
        </div>
        <div class="pros-item">
            <div class="image">
                <img src="<?=Yii::getAlias('@web')?>/img/pros/3.jpg" alt="Высококвалифицированный специалисты">
            </div><div class="info">
                <div class="title">Высококвалифицированные специалисты</div>
                <p>
                    <?=$copy['text-6']->content;?>
                </p>
            </div>
        </div>

    </div>
</section>

