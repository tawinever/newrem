<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 23.06.2016
 * Time: 22:43
 */

namespace app\components\sections\longreadSection;


use app\components\parents\PageWidget;
use app\models\Page;
use yii\base\UserException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class LongreadSection extends PageWidget
{
    public function run()
    {
        parent::run();

        if(\Yii::getAlias('@device') == 'mobile') {
            $pageUrl = $this->page->url;
            $pageUrl = substr($pageUrl, strlen( \Yii::$app->params['mobilePrefix']));
            $this->page = Page::find()->where(['url' => $pageUrl])->one();
            if (is_null($this->page))
                throw new UserException('You should create page');

            $this->simpleData = ArrayHelper::map($this->getSimpleData(),'key','value');
        }
        return  $this->render('view',['simpleData' => $this->simpleData]);
    }
}