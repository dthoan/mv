<?php

class Request{

    public function __construct(){
        $this->init();
    }

    public function init(){
        //
    }

    public function getParams(){
        $allGet = $this->getGet();
        $allPost = $this->getPost();
        return array_merge($allGet, $allPost);
    }

    public function getParam($nameParam, $default = null){
        $allParams = $this->getParams();
        return $allParams[$nameParam] ?? $default;
    }

    public function getPost($name = null){
        return $_POST[$name] ?? $_POST;
    }

    public function getGet($name = null){
        return $_GET[$name] ?? $_GET;
    }

    public function json($datas, $code = 200){
        if(!isset($datas['code'])){
            $datas['code'] = $code;
        }
        header('Content-type: application/json');
        echo json_encode($datas);
        return true;
    }

}