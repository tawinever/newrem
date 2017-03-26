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
//           TODO Realize createUrl
//        var_dump($route);
//        var_dump($params);
//        die();
//        if ($route === 'car/index') {
//            if (isset($params['manufacturer'], $params['model'])) {
//                return $params['manufacturer'] . '/' . $params['model'];
//            } elseif (isset($params['manufacturer'])) {
//                return $params['manufacturer'];
//            }
//        }
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

        $page = Page::find()
            ->where(['url' => $pathInfo])
            ->one();
        return is_null($page) ? false : ['site/page', ['page' => $page]]; // this rule does not apply
    }
}