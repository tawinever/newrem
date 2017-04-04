<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 4/4/17
 * Time: 9:40 AM
 */

namespace app\services;

use app\models\Page;
use Yii;
use yii\helpers\Url;
use yii\web\Request;
use yii\web\UrlManager;
use yii\web\UrlRuleInterface;

class SeoRedirect implements UrlRuleInterface
{
    /**
     * Parses the given request and returns the corresponding route and parameters.
     * @param UrlManager $manager the URL manager
     * @param Request $request the request component
     * @return array|boolean the parsing result. The route and the parameters are returned as an array.
     * If false, it means this rule cannot be used to parse this path info.
     */
    public function parseRequest($manager, $request)
    {
        // TODO: Implement parseRequest() method.
        $pathInfo = $request->getPathInfo();
        if($pathInfo == 'ipad-astana'){
            $page = Page::find()->where(['url' => 'ipad'])->one();
            Yii::$app->getResponse()->redirect(['site/page', 'page' => $page],301)->send();
        }
        return false;
    }

    /**
     * Creates a URL according to the given route and parameters.
     * @param UrlManager $manager the URL manager
     * @param string $route the route. It should not have slashes at the beginning or the end.
     * @param array $params the parameters
     * @return string|boolean the created URL, or false if this rule cannot be used for creating this URL.
     */
    public function createUrl($manager, $route, $params)
    {
        return false;
    }

}