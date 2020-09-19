<?php

class UsersController extends Controller{

    private $usersModels;

    public function __construct(){
        parent::__construct();
        $this->isAccessAdmin();
        $this->usersModels = new UsersModels();
    }

    public function index(){
        $this->checkPermision('view_user');

        $params = [
            'users' => $this->usersModels->all()
        ];
        return $this->view('users/list.php', $params);
    }

    public function add($params = []){
        $this->checkPermision('add_user');

        return $this->view('users/add_update.php', $params);
    }

    public function addForm(){
        $this->isPostMethod();
        $this->checkPermision('add_user');

        $params = $_POST;
        $errors = $this->usersModels->validateRegister($params);
        if(!empty($errors)){
            $params = [
                'errors' => $errors,
                'userForm' => $params
            ];
            return $this->add($params);
        }
        unset($params['re_password']);
        $params['password'] = $this->hash($params['password']);
        $this->usersModels->insert($params);
        return $this->redirect(BASE_URL . '?controller=users');
    }

    public function edit(){
        $this->redirect(BASE_URL . '?controller=permissions');
    }

    public function editForm(){
        $this->redirect(BASE_URL . '?controller=permissions');
    }

    public function diactive(){
        $this->checkPermision('diactive_user');
        $id = $_GET['id'] ?? '';
        if($id == ''){
            die('user not found');
        }

        if(!$this->usersModels->update(['flag_deactive' => 1], ['id' => $id])){
            echo "<script>alert('Deactive user error!')</script>";
        }
        return $this->redirect(BASE_URL . '?controller=users');
    }

}