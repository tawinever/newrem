<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/26/17
 * Time: 7:27 PM
 */

/** @var \app\models\Wps $widgets */
/** @var \app\models\Page $page */
foreach ($widgets as $widget)
{
    echo $widget['widget_namespace']::widget(['page' => 'iphone']);
}