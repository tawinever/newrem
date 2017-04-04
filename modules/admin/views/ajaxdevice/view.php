<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Device */
?>
<div class="device-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'parent_id',
            'title',
            'status',
            'poryadok',
            'is_root',
            'add_children',
        ],
    ]) ?>

</div>
