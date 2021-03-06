<?php



$params = require __DIR__ . '/params.php';

$db = require __DIR__ . '/db.php';



$config = [

    'id' => 'basic',

    'basePath' => dirname(__DIR__),

    'bootstrap' => ['log'],



    'aliases' => [

        '@bower' => '@vendor/bower-asset',

        '@npm'   => '@vendor/npm-asset',

    ],

    'modules' => [

      

    ],

    'components' => [



        'request' => [

            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation

            'cookieValidationKey' => 'aaaaaaaaaaaaaaaaaaaaa',

            'baseUrl'=>"",

        ],

        'assetManager' => [

            'class' => \yii\web\AssetManager::class,

            'appendTimestamp'=>true,

            'bundles' => [

                'dosamigos\google\maps\MapAsset' => [

                    'options' => [

                        'key' => 'AIzaSyA40tWknBftdkqP42hr7Ggikpya9KELPqA',

                        'libraries' => 'places',

                        'v' => '3.exp',

                        'sensor'=> 'false'

                    ]

                ]

            ]

        ],

        'cache' => [

            'class' => 'yii\caching\FileCache',

        ],

        'user' => [

            'identityClass' => 'app\models\User',

            'enableAutoLogin' => true,

        ],

     

        'errorHandler' => [

            'errorAction' => 'site/error',

        ],

        'mailer' => [

            'class' => 'yii\swiftmailer\Mailer',

            // send all mails to a file by default. You have to set

            // 'useFileTransport' to false and configure a transport

            // for the mailer to send real emails.

            'useFileTransport' => true,

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

        'db' => $db,



        'urlManager' => [

            'class' => 'codemix\localeurls\UrlManager',

            'languages' => ['en', 'ru','uz'], // List all supported languages here

            'enablePrettyUrl' => true,

            'showScriptName' => false,

            'rules' => [

            ],

        ],

        'yandexMapsApi' => [

            'class' => 'mirocow\yandexmaps\Api',

        ],

    ],

    'params' => $params,

];



if (YII_ENV_DEV) {

    // configuration adjustments for 'dev' environment

    $config['bootstrap'][] = 'debug';

    $config['modules']['debug'] = [

        'class' => 'yii\debug\Module',

        // uncomment the following to add your IP if you are not connecting from localhost.

        //'allowedIPs' => ['127.0.0.1', '::1'],

    ];



    $config['bootstrap'][] = 'gii';

    $config['modules']['gii'] = [

        'class' => 'yii\gii\Module',

        'generators'=>[

            'crud'=>[

                'class' => \yii\gii\generators\crud\Generator::class,

                'templates' => [

                    'adminlte' => '@vendor/dmstr/yii2-adminlte-asset/gii/templates/crud/simple',

                ]

            ],



        ],

        // uncomment the following to add your IP if you are not connecting from localhost.

        //'allowedIPs' => ['127.0.0.1', '::1'],

    ];

}



return $config;

