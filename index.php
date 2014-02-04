<?php

// change the following paths if necessary
$yii=dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'yii-1.1.14.f0fee9'.DIRECTORY_SEPARATOR.'framework'.DIRECTORY_SEPARATOR.'yii.php';
$config=dirname(__FILE__).DIRECTORY_SEPARATOR.'protected'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
