<?php 

function config($nameConfig, $configGet = ''){
    $path = './config/' . $nameConfig . '.php';
    if(!file_exists($path)){
        return [];
    }
    $config = require($path);
    if($configGet != ''){
        return $config[$configGet] ?? null;
    }
    return $config;
}

function _require($path){
    foreach(glob($path.'/*.*') as $file) {
        if(file_exists($file)){
            require_once $file;
        }
    }
}