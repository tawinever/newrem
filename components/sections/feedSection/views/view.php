<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 23.06.2016
 * Time: 22:08
 */?>
<section class="section-feed">
    <a href="<?=\yii\helpers\Url::toRoute('site/feedback')?>"><h2 class="ta-c">27% клиентов приходят
        к нам по рекомендации
    </h2></a>
    <div class="feed-container">
        <?foreach ($feedbacks as $feedback): ?>
        <div class="feed-item">
            <?=$feedback->content?>
        </div>
        <?endforeach;?>

    </div>
</section>
