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
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'q_nRFl1U_O9eYsoV478JE-N5ay87NYdD',
        ],
		'urlManager' => [
           'enablePrettyUrl' => true,
           'showScriptName' => false,
           'rules' => [
               '' => 'site/index',
               '<action>'=>'site/<action>',
           ],
       ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /*'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],*/
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
        ],
        'mail' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'transport' => 
            [ 'class' =>'Swift_SmtpTransport',
            'host' =>'smtp.gmail.com',
            'username' =>'nathalymejia995@gmail.com',
            'password' =>'naty088084703',
            'port' =>'587',
            'encryption' =>'tls',

            ],

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
        
    ],
	'modules' => [
    'user' => [
        'class' => 'dektrium\user\Module',
          'enableUnconfirmedLogin' => false,
        'confirmWithin' => 21600,
        'cost' => 12,
        'admins' => ['admin']
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
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
	     'generators' => [
	        'crud' => [
	            'class' => 'yii\gii\generators\crud\Generator',
	            'templates' => [ // setting templates
	                'material-desing' => '@vendor/exocet/yii2-bootstrap-material-design/generators/material-design/crud',
	                'material-desing-h' => '@vendor/exocet/yii2-bootstrap-material-design/generators/material-design-h/crud', 
	                'material-design-with-icons' => '@vendor/exocet/yii2-bootstrap-material-design/generators/material-design-with-icons/crud',
	                'material-design-h-with-icons' => '@vendor/exocet/yii2-bootstrap-material-design/generators/material-design-h-with-icons/crud'
	            ]
	        ]
	    ], 
          
    ];
}

return $config;
