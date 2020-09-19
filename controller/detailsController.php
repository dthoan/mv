<?php

class DetailsController extends Controller{

    private $detailsModels;

    public function __construct(){
        parent::__construct();
        $this->detailsModels = new detailsModels();
    }

    public function index(){
        $alldetails = $this->detailsModels->all();
        $params = [
            'details' => $alldetails
        ];
        return $this->view('details/details.php', $params);
    }
}