<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 24.06.2016
 * Time: 0:49
 */

namespace app\components\endScripts;


use Yii;
use yii\base\Widget;

class EndScripts extends Widget
{
    public $action = 'default'; 
    public function run()
    {
        parent::run();
        if(Yii::$app->controller->action->id == 'thanks'){
            $this->action = 'thanks';
        }
        return $this->render('view', ['action' => $this->action]);
    }

}