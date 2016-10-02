<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 23.06.2016
 * Time: 22:43
 */

namespace app\components\sections\longreadSection;


use yii\base\Widget;

class LongreadSection extends Widget
{
    public $page = 'home';
    public function run()
    {
        parent::run();
        if($this->page == 'macbook') 
            return $this->render('macbook',['page' => $this->page]);
        return  $this->render('view',['page' => $this->page]);
    }
}