<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 23.06.2016
 * Time: 22:43
 */

namespace app\components\sections\lastSection;


use yii\base\Widget;

class LastSection extends Widget
{
    public $page = 'home';
    public function run()
    {
        parent::run();

        return  $this->render('view',['page' => $this->page]);
    }
}