<?php

namespace app\controllers;

use app\components\remOnlineApi\RemOnlineApi;
use app\models\Copyright;
use app\models\Notification;
use Yii;
use yii\base\ViewContextInterface;
use yii\filters\AccessControl;
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
        $feedbacks = Copyright::find()->where(['section' => 'feedSection', 'position' => 'insta'])->orderBy('id DESC')->all();
        return $this->render('feedback',['feedbacks' => $feedbacks]);
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
