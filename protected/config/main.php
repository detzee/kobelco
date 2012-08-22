<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Kobelco',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		/**
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		**/
		// uncomment the following to enable URLs in path-format
		
		'request'=>array(
	        'enableCookieValidation'=>true,
	        'enableCsrfValidation'=>true,
	    ),
	    'urlManager'=>array(
	        'class'=>'application.components.UrlManager',
	        'urlFormat'=>'path',
	        'showScriptName'=>false,
	        'rules'=>array(
	            '<language:(vi|en)>/' => 'site/index',
	            '<language:(vi|en)>/<action:(contact|login|logout)>/*' => 'site/<action>',
	            '<language:(vi|en)>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
	            '<language:(vi|en)>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
	            '<language:(vi|en)>/<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
	        ),
	    ),

		/**
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		**/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=kobelco',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'sondoha@gmail.com',
		'languages' => array(
			'en' => 'English',
			'vi' => 'Tiếng việt'
		),
		'default_language' => 'en'
	),
);
