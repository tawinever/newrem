<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 5/20/17
 * Time: 5:37 PM
 */

namespace app\components\sections\mobile\proSection;


use app\components\parents\PageWidget;

class ProSection extends PageWidget
{
    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub
        return $this->render('view',['simpleData' => $this->simpleData]);
    }

}