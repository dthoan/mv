<?php

class NewsController extends Controller{

    private $newsModels;

    public function __construct(){
        parent::__construct();
        $this->newsModels = new NewsModels();
    }

    public function index(){
        $allNews = $this->newsModels->all();
        $params = [
            'news' => $allNews
        ];
        return $this->view('news/blog.php', $params);
    }
}