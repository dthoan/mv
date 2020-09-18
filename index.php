<?php

$baseUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
$baseUrl = rtrim($baseUrl, 'index.php');

define("BASE_URL", $baseUrl);
define("BASE_PATH", __DIR__);
define("PATH_UPLOAD", __DIR__);
define("URL_UPLOAD", __DIR__);

require_once './function.php';

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