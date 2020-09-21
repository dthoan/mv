<?php 


class Controller {

    protected $layout = 'layouts/layout.php';

    public function __construct(){
    }

    public function view($path, array $params = [], $returnHtml = false){
        if(!isset($params['typePage'])){
            $params['typePage'] = 'add';
        }

        $paramsContents = $params;
        //Đầu tiên cần phải render html của content body
        $contents = $this->render($path, $paramsContents);

        //render footer
        $paramsFooter = $params;
        $footer = $this->render('layouts/footer.php', $paramsFooter);

        //render header
        $paramsHeader = $params;
        $header = $this->render('layouts/header.php', $paramsHeader);

        //sau đó set content body vào params để thực hiện render layout
        // layout $contents, nên phải bắt buộc key = contents
        $paramsLayout = array_merge($params, [
            'contents' => $contents,
            'footer' => $footer,
            'header' => $header,
        ]);
        
        $html = $this->render($this->layout, $paramsLayout);

        if(!$returnHtml){
            echo $html;
            return true;
        }else {
            return $html;
        }
    }

    public function render($path, $params){
        extract($params);
        $path = BASE_PATH . '/views/' . $path;
        if(!file_exists($path) || is_dir($path)){
            return '';
        }

        // lấy tất cả đường dẫn được chọn
        ob_start();
        require($path);
        $contents = ob_get_contents();
        ob_end_clean();

        return $contents;
    }

    public function redirect($url){
        header("Location: " . $url);
        die();
    }

    public function saveFile($files){
        $nameFile               = $files['name'] ?? '';
        $sizeFile               = $files['size'] ?? 0;
        $fileUploadConfig       = config('file_upload');
        $imageExtensionAllow    = $fileUploadConfig['imageExtensionAllow']; //;là những loại file dc phép upload ok
        $imageFileType          = strtolower(pathinfo($nameFile,PATHINFO_EXTENSION)); //Là đuôi của file //PATHINFO_EXTENSION là 1 từ khóa mặc định của php

        $pathUpload             = 'public/uploads/';
        $dateUpload             = date('YmdHis');
        $nameFileUpload         = md5($nameFile . $dateUpload) . '_' . $dateUpload . '.' . $imageFileType;

        if(!in_array($imageFileType, $imageExtensionAllow)){
            die("Type file not support!");
        }
        if($sizeFile > $fileUploadConfig['maxSize']){
            die('Size File to big!');
        }
        
        //upload
        $pathFileSave = $pathUpload . $nameFileUpload;
        $pathMoveFile = PATH_UPLOAD . '/' . $pathFileSave;

        if (move_uploaded_file($files["tmp_name"], $pathMoveFile)) {
            return $pathFileSave;
        } else {
            die("Save File Error!");
        }

    }

    public function isPostMethod(){
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    public function handlePostMethod(){
        if(!$this->isPostMethod()){
            die("Not support method GET");
        }
    }

    public static function hash($str){
        return sha1(md5(sha1($str)));
    }

    public function isAccessAdmin(){
        if(!Users::isLogin() || !Users::can('admin')){
            $this->redirect(rtrim(BASE_URL, 'admin/') . "?controller=home");
        }
    }

    public function checkPermision($permision){
        if(!Users::can($permision)){
            $this->redirect(BASE_URL . '?controller=home');
        }
    }

}
