<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/26/17
 * Time: 4:59 PM
 */

namespace app\services;

use app\models\Page;
use Yii;
use yii\web\UrlRuleInterface;
use yii\base\Object;

class LandingUrlRule extends Object implements UrlRuleInterface
{
    public function createUrl($manager, $route, $params)
    {
        if ($route === 'site/page') {
            if(isset($params['page']) && get_class($params['page']) == 'app\models\Page'){
                if($params['page']->url == 'home')
                    return '';
                else
                    return $params['page']->url;
            }
        }
        return false; // this rule does not apply
    }

    /**
     * @param \yii\web\UrlManager $manager
     * @param \yii\web\Request $request
     * @return array|boolean
     */
    public function parseRequest($manager, $request)
    {
        //Use prefix to define different page objects for one url
        $devicePrefix = "";
        $pathInfo = $request->getPathInfo();
        //zashita ot mobilePrefix requests
        if(strpos($pathInfo,Yii::$app->params['mobilePrefix']) > -1) return false;
        //zashite ot sluchainego naznachenie pathinfo kak home tak kak home eto tolko dlya glavnii stranicy
        if($pathInfo == "home" || $pathInfo == "custom") return false;
        if($pathInfo=="") $pathInfo = "home";
        if(\Yii::getAlias('@device') == 'mobile')
            $devicePrefix = Yii::$app->params['mobilePrefix'];
        $page = Page::find()
            ->where(['url' => $devicePrefix.$pathInfo])
            ->one();
        return is_null($page) ? false : ['site/page', ['page' => $page]]; // this rule does not apply
    }
}