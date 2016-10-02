<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 24.06.2016
 * Time: 0:35
 */

namespace app\components\metaIcon;


use yii\base\Widget;

class MetaIcon extends Widget
{
    public function run()
    {
        parent::run();

        return $this->render('view');
    }

}