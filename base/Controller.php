<?php 


class Controller {

    public function __construct(){
        //
    }

    public function view($path, array $params = [], $returnHtml = false){
        extract($params);
        $path = __DIR__ . '/../views/' . $path;
        if(!file_exists($path)){
            return '';
        }
        ob_start();
        require_once($path);
        $contents = ob_get_contents();
        ob_end_clean();
        if($returnHtml){
            return $contents;
        }
        echo $contents;
    }

    public function redirect($url){
        header("Location: " . $url);
        //header("Location: https://google.com");
        return true;
    }

}