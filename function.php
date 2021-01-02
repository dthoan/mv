<?php 

function config($nameConfig, $configGet = ''){
    $path = __DIR__ . '/config/' . $nameConfig . '.php';
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

function validateDate($date, $format = 'Y-m-d'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

function validatePhone($phone){
    $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    $phone_to_check = str_replace("-", "", $filtered_phone_number);
    return !(strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14);
}

function _dump($data){
    echo "<pre>";
    print_r($data);
    die;
}

function session(){
    return new Session();
}

function response(){
    return new Request();
}