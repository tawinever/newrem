<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 21.06.2016
 * Time: 4:04
 */

namespace app\components\sections\mainSection;


use app\models\Copyright;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class MainSection extends Widget
{
    public $page = "home";
    public $bgVideo = "sup";
    
    public function init()
    {
        parent::init(); 
        if($this->page == 'macbook' || $this->page == 'notebook')
            $this->bgVideo = "bg_mac";
        
    }

    public function run()
    {
        parent::run();
        $this->registerClientScript();
        $models = Copyright::find()->where(['page' => $this->page, 'section' => 'mainSection'])->all();
        $mapModels = ArrayHelper::index($models,'position');
        if(\Yii::getAlias('@device') != 'mobile')
        {
            return $this->render('view',['copy' => $mapModels,'page' => $this->page,'bgVideo' => $this->bgVideo]);
        }
        else {
            return $this->render('mobile',['copy' => $mapModels,'page' => $this->page]);

        }
    }

    protected function registerClientScript()
    {
        $view = $this->getView();
        MainSectionAsset::register($view);
        if(\Yii::getAlias('@device') != 'mobile')
        {
            $js = <<<EOT
            $(window).load(function(){
                SetBGVideo('$this->bgVideo')
            });
EOT;
            $view->registerJs($js);
        }

    }
}