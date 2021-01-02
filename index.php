<?php

//if(count(explode('localhost', $_SERVER['HTTP_HOST'])) > 1){
//    $cheme = $_SERVER['REQUEST_SCHEME'];
//}else{
//    $cheme = 'https';
//}

$cheme = $_SERVER['REQUEST_SCHEME'];

$baseUrl = $cheme . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
$baseUrl = rtrim($baseUrl, 'index.php');
define("BASE_URL", $baseUrl);
define("BASE_PATH", __DIR__);
define("PATH_UPLOAD", __DIR__);
define("URL_UPLOAD", __DIR__);

require_once './function.php';

//require autoload
require './vendor/autoload.php';

//require Base
_require('./base');

//require Controller
_require('./controller');

//require Models
_require('./models');

$controller = ucfirst($_GET['controller'] ?? 'home') . 'Controller'; //ProductController
$action     = strtolower($_GET['action'] ?? 'index');

if(!class_exists($controller)){
    die('Controller not found in server!');
}

$controllerClass = new $controller();
if(!method_exists($controller, $action)){
    die('Method not found in server! _TEST____MV_');
}

$controllerClass->{$action}();
