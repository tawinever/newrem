<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/27/17
 * Time: 1:00 PM
 */
if(isset($simpleData['title']))
    $this->title = $simpleData['title'];
if(isset($simpleData['metaDesc']))
    $this->registerMetaTag([
        'name' => 'description',
        'content' => $simpleData['metaDesc'],
    ]);