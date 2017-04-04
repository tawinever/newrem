<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/27/17
 * Time: 11:32 AM
 */

namespace app\components\titleSetter;


use app\components\parents\PageWidget;
use yii\base\Widget;

class TitleSetter extends PageWidget
{

    /**
     * @return string
     */
    public function run()
    {
        parent::run();

        return $this->render('title',['simpleData' => $this->simpleData]);
    }

}
