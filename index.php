<?php

if(isset($_GET['adapter']) && $_GET['adapter'] == "pc"){
    
}else{
    $nowUrl = $_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
    if(strpos($nowUrl, "/mobile") == false){
        if(stripos($_SERVER['HTTP_USER_AGENT'],"android")!=FALSE||stripos($_SERVER['HTTP_USER_AGENT'],"ios")!=FALSE||stripos($_SERVER['HTTP_USER_AGENT'],"wp")!=FALSE)
        {
            header("location:/mobile/"); 
        }
    }
}

defined('YII_DEBUG') or define('YII_DEBUG', true);
//defined('YII_ENV') or define('YII_ENV', 'test');
defined('YII_ENV') or define('YII_ENV', 'dev'); //开启debugbar

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/common/config/bootstrap.php');
require(__DIR__ . '/frontend/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/common/config/main.php'),
    require(__DIR__ . '/common/config/main-local.php'),
    require(__DIR__ . '/frontend/config/main.php'),
    require(__DIR__ . '/frontend/config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
