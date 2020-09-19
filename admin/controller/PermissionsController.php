<?php

class PermissionsController extends Controller{
    private $permissionModels;
    private $userModels;

    public function __construct(){
        parent::__construct();
        $this->isAccessAdmin();
        $this->permissionModels = new PermissionModels();
        $this->userModels = new UsersModels();
    }

    public function index(){
        $this->checkPermision('view_permission');
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
        $this->checkPermision('add_permission');
        return $this->view('permissions/add_update.php');
    }

    public function addPermission(){
        $this->isPostMethod();
        $this->checkPermision('add_permission');

        $params = $_POST;
        $permissionCode = $params['permision_code'] ?? '';
        $permissionName = $params['permision_name'] ?? '';
        $permissionOrder = $params['permision_order'] ?? 0;

        if($permissionCode == ''){
            $this->redirect(BASE_URL . '?controller=permissions');
        }

        $aryInsert = [
            'permision_code' => $permissionCode,
            'permision_name' => $permissionName,
            'permision_order' => $permissionOrder,
        ];

        if(!$this->permissionModels->insert($aryInsert)){
            echo "<script>alert('Insert permission DB error!')</script>";
        }
        return $this->redirect(BASE_URL . '?controller=permissions');
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

    public function permissionUser(){
        $this->checkPermision('edit_permission_user');

        $user = $_GET['id'] ?? '';

        $userData = $this->userModels->one(['id' => $user]);

        if(empty($userData)){
            $this->redirect(BASE_URL . '?controller=permissions');
        }

        $allPermission = $this->permissionModels
                                ->order('permision_order', 'ASC')
                                ->order('id', 'ASC')
                                ->get();
        $permissionUser = explode('|', $userData['permisions']);

        $params = [
            'permissions' => $allPermission,
            'permissionUser' => $permissionUser,
        ];
        return $this->view('permissions/permissionUser.php', $params);
    }

    public function submitPermissionUser(){
        $this->isPostMethod();
        $this->checkPermision('edit_permission_user');

        $params = $_POST;
        $userID = $params['user_id'];
        $permission = $params['permission'];

        $aryUpdate = [
            'permisions' => implode('|', $permission)
        ];
        $this->userModels->where(['id' => $userID]);

        if(!$this->userModels->update($aryUpdate)){
            echo "<script>alert('Update to DB error!')</script>";
        }
        return $this->redirect(BASE_URL . '?controller=users');
    }

}