<?php

class PermissionsController extends Controller{
    private $permissionModels;

    public function __construct(){
        parent::__construct();
        $this->isAccessAdmin();
        $this->permissionModels = new PermissionModels();
    }

    public function index(){
//        $this->checkPermision('view_users');
        $allPermissions = $this->permissionModels
                                ->order('permision_order' , 'ASC')
                                ->order('id' , 'ASC')
                                ->get();
        $params = [
            'permissions' => $allPermissions
        ];
        return $this->view('permissions/list.php', $params);
    }

    public function add(){
        $this->redirect(BASE_URL . '?controller=permissions');
    }

    public function addForm(){
        $this->redirect(BASE_URL . '?controller=permissions');
    }

    public function edit(){
        $this->redirect(BASE_URL . '?controller=permissions');
    }

    public function editForm(){
        $this->redirect(BASE_URL . '?controller=permissions');
    }

    public function delete(){
        $this->redirect(BASE_URL . '?controller=permissions');
    }

}