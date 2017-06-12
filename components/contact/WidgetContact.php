<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 20.07.2016
 * Time: 20:32
 */

namespace app\components\contact;


use yii\base\Widget;

class WidgetContact extends Widget
{
    public $title = 'Remonteka.kz';
    public function run()
    {
        parent::run();
        return $this->render('view',['title' => $this->title]);

    }
}
