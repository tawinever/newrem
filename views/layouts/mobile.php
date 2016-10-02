<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\LandingAsset;
use yii\helpers\Html;
use yii\helpers\Url;

LandingAsset::register($this);
$this->registerLinkTag(['rel' => 'canonical', 'href' => Url::canonical()]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?=\app\components\metaIcon\MetaIcon::widget() ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?=app\components\headScript\HeadScript::widget() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>

<?=app\components\footer\Footer::widget()?>
<?=\app\components\endScripts\EndScripts::widget()?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
