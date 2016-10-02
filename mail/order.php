<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 19.07.2016
 * Time: 3:38
 */?>
<h1>
    Имя - <?=$model->sender_name?>
</h1>
<h2>
    Номер - <?=$model->sender_number?>
</h2>
<h2>
    Заказ - <?=$model->info?>
</h2>
<h2>
    Дата - <?=Yii::$app->formatter->asDatetime($model->created_at)?>
</h2>


