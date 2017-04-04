<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/26/17
 * Time: 4:59 PM
 */

namespace app\services;

use app\models\Page;
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
        $pathInfo = $request->getPathInfo();
        //zashite ot sluchainego naznachenie pathinfo kak home tak kak home eto tolko dlya glavnii stranicy
        if($pathInfo == "home" || $pathInfo == "custom") return false;
        if($pathInfo=="") $pathInfo = "home";
        $page = Page::find()
            ->where(['url' => $pathInfo])
            ->one();
        return is_null($page) ? false : ['site/page', ['page' => $page]]; // this rule does not apply
    }
}