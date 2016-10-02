<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 22.07.2016
 * Time: 4:43
 */

namespace app\components\headScript;


use yii\base\Widget;

class HeadScript extends Widget
{
    public function run()
    {
        parent::run(); 
        return $this->render('view');
    }
}