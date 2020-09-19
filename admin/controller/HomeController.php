<?php 

class HomeController extends Controller{

    public function index(){
        $this->redirect(BASE_URL . '?controller=Loaihang');
    }
}