<?php 

define("BASE_URL", 'http://localhost:8180/mv/index.php');

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