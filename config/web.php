<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'language' => 'ru_RU',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log','devicedetect'],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Admin',
        ],
        'gridview' => [ 'class' => '\kartik\grid\Module' ],
    ],
    'components' => [

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'XVwIQ2FA8AwNNDGiiRrvc67IGIPBGGBO',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['admin/default/login'],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'devicedetect' => [
            'class' => 'alexandernst\devicedetect\DeviceDetect'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'localhost',
                'username' => 'robot@remonteka.kz',
                'password' => 'rauan123',
                'port' => '25',
                //'encryption' => 'tls',
            ],
            'viewPath' => '@app/mail'
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => YII_ENV == 'dev' ? require(__DIR__ . '/devdb.php') : require(__DIR__ . '/db.php'),

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
                //site controller
                //'' => 'site/index',
                //'iphone-astana' => 'site/iphone',
                //'ipad-astana' => 'site/ipad',
               // 'telefon-astana' => 'site/android',
                //'notebook-astana' => 'site/notebook',
                //'macbook-astana' => 'site/macbook',
                //'express-astana' => 'site/express',
                //'zamena-stekla' => 'site/display',

                'calc/' => 'site/calc',
//                'calc/<category:\w+>/' => 'site/calc',
//                'calc/<category:\w+>/<model:\w+>/' => 'site/calc',
                [
                    'pattern' => 'calc/<devices:.*>',
                    'route' => 'site/calc',
                    'encodeParams' => false,
                ],

                'thanks' => 'site/thanks',
                'contact' => 'site/contact',
                'feedback' => 'site/feedback',
                'policy' => 'site/policy',





                //admin module
                'admin' => 'admin/default/index',
                'admin/<controller:\w+>' => 'admin/<controller>/index',
                'admin/<controller:\w+>/<action:\w+>'=>'admin/<controller>/<action>',


                //sandboxes
//                'insta' => 'site/insta',
//                'google' => 'site/google',

                //dynamic Landing Page group
                [
                    'class' => 'app\services\LandingUrlRule'
                ],

                //redirects
                [
                    'class' => 'app\services\SeoRedirect'
                ],

            ],
        ],

    ],

    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
//    $config['bootstrap'][] = 'debug';
//    $config['modules']['debug'] = [
//        'class' => 'yii\debug\Module',
//    ];

//    $config['bootstrap'][] = 'gii';
//    $config['modules']['gii'] = [
//        'class' => 'yii\gii\Module',
//    ];
//
}

return $config;
