<?php

namespace app\controllers;

use app\components\remOnlineApi\RemOnlineApi;
use app\models\Copyright;
use app\models\Notification;
use app\models\Page;
use app\models\Wps;
use linslin\yii2\curl\Curl;
use Yii;
use yii\base\ViewContextInterface;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\NotFoundHttpException;

class SiteController extends Controller implements ViewContextInterface
{

    public function init()
    {
        parent::init();
        $this->layout = "new";
        if(\Yii::getAlias('@device') == 'mobile'){
            $this->viewPath =  Yii::getAlias('@app/views/site/mobile');
            $this->layout = 'mobile';
        }
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    //Action where generates all landing pages
    public function actionPage($page)
    {
        if($page->layout !== "new")
            $this->layout = $page->layout;

        //getting placed widgets
        $widgets = Wps::find()->where(['page_id' => $page->id])->orderBy('position')->asArray()->all();


        //trying to get positions for parent object
        //if i there empty will go parent of parent and so on...
        $parentPage = null;
        if(!is_null($page->parent_id)) $parentPage = $page->parent;
        while(count($widgets) == 0){
            if(!is_null($parentPage)) {
                $widgets = Wps::find()->where(['page_id' => $parentPage->id])->orderBy('position')->asArray()->all();
                if(!is_null($parentPage)) $parentPage = $parentPage->parent;
                else $parentPage = null;
            }
            else
                break;
        }
        return $this->render('page',['widgets' => $widgets,'page' => $page]);
    }


    public function actionInsta(){

        return "hello, its insta background";
    }

    public function actionGoogle(){


        return "hello, its google background";
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionIphone()
    {
        return $this->render('sub_iphone');
    }

    public function actionIpad()
    {
        return $this->render('sub_ipad');
    }

    public function actionAndroid()
    {
        return $this->render('sub_android');
    }

    public function actionNotebook()
    {
        return $this->render('sub_notebook');
    }

    public function actionMacbook()
    {
        return $this->render('sub_macbook');
    }

    public function actionExpress()
    {
        return $this->render('sub_express');
    }

    public function actionDisplay()
    {
        return  $this->render('sub_display');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionStatus()
    {
        return $this->render('status');
    }

    public function actionFeedback()
    {
        $page = Page::find()->one();
        return $this->render('feedback',['page' => $page]);
    }

    public function actionPolicy()
    {
        return $this->render('policy');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function  actionCalc()
    {
        return $this->render('calculate');
    }

    public function  actionThanks()
    {
        return $this->render('thanks');
    }
}
