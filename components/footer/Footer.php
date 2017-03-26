<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 23.06.2016
 * Time: 23:26
 */

namespace app\components\footer;


use yii\base\Widget;

class Footer extends Widget
{
    public function run()
    {
        parent::run();
        return $this->render('view');
    }
}