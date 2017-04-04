<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 23.06.2016
 * Time: 22:43
 */

namespace app\components\sections\longreadSection;


use app\components\parents\PageWidget;
use yii\base\Widget;

class LongreadSection extends PageWidget
{
    public function run()
    {
        parent::run();
//        if($this->page->id == 'macbook')
//            return $this->render('macbook',['page' => $this->page]);
//        if($this->page->id == 'notebook')
//            return $this->render('notebook',['page' => $this->page]);
//        if($this->page->id == 'display')
//            return $this->render('display',['page' => $this->page]);

        return  $this->render('view',['simpleData' => $this->simpleData]);
    }
}