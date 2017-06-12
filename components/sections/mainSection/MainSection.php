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
use app\models\Page;
use yii\base\UserException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class MainSection extends PageWidget
{
    public $bgVideo = "sup";

    public function init()
    {
        parent::init();
        if(isset($this->simpleData['bgVideo'])){
        	$this->bgVideo = $this->simpleData['bgVideo'];	
        }
        if(\Yii::getAlias('@device') == 'mobile') {
            $pageUrl = $this->page->url;
            $pageUrl = substr($pageUrl, strlen( \Yii::$app->params['mobilePrefix']));
            $this->page = Page::find()->where(['url' => $pageUrl])->one();
            if (is_null($this->page))
                throw new UserException('You should create page');

            $this->simpleData = ArrayHelper::map($this->getSimpleData(),'key','value');
        }
    }

    public function run()
    {
        parent::run();
        if(\Yii::getAlias('@device') == 'mobile'){
        	return $this->render('mobile',['simpleData' => $this->simpleData]);
        }
        $this->registerClientScript();
        return $this->render('view',['simpleData' => $this->simpleData]);
    }

    protected function registerClientScript()
    {
        $host = Url::base(true);
        $view = $this->getView();
        MainSectionAsset::register($view);
        $js = <<<EOT
        $(window).load(function(){
            SetBGVideo('$this->bgVideo','$host')
        });
EOT;
        $view->registerJs($js);
    }
}