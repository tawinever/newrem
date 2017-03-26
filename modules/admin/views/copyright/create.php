<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Copyright */

$this->title = 'Create Copyright';
$this->params['breadcrumbs'][] = ['label' => 'Copyrights', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="copyright-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
