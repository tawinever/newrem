<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:04
 */

namespace app\components\sections\mainSection;


use app\components\parents\PageWidget;
use yii\helpers\Url;

class MainSection extends PageWidget
{
    public $bgVideo = "sup";

    public function init()
    {
        parent::init();
        $this->bgVideo = $this->simpleData['bgVideo'];
    }

    public function run()
    {
        parent::run();
        $this->registerClientScript();
        if(\Yii::getAlias('@device') != 'mobile')
        {
            return $this->render('view',['simpleData' => $this->simpleData]);
        }
        else {
            return $this->render('mobile',['simpleData' => $this->simpleData]);

        }
    }

    protected function registerClientScript()
    {
        $host = Url::base(true);
        $view = $this->getView();
        MainSectionAsset::register($view);
        if(\Yii::getAlias('@device') != 'mobile')
        {
            $js = <<<EOT
            $(window).load(function(){
                SetBGVideo('$this->bgVideo','$host')
            });
EOT;
            $view->registerJs($js);
        }

    }
}