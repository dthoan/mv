<?php

use \duncan3dc\Sessions\Session;

class UserController extends Controller{

    private $usersModel;
    protected $layout = 'layouts/userLayout.php';

    public function __construct(){
        parent::__construct();
        Session::name("UserLogin");
        $this->usersModel = new UsersModels();
    }

    public function notLogin(){
        if(Users::get()->logined){
            $this->redirect(BASE_URL . '?controller=home');
        }
    }

    public function index(){
    }

    public function register($params = []){
        $this->notLogin();
        return $this->view('users/register.php', $params);
    }

    public function registerForm(){
        $this->isPostMethod();
        $params = $_POST;
        $errors = $this->usersModel->validateRegister($params);
        if(!empty($errors)){
            $params = [
                'errors' => $errors,
                'userForm' => $params
            ];
            return $this->register($params);
        }
        unset($params['re_password']);
        $params['password'] = $this->hash($params['password']);
        $this->usersModel->insert($params);
        return $this->redirect(BASE_URL . '?controller=user&action=login');
    }

    public function login($params = []){
        $this->notLogin();
        return $this->view('users/login.php', $params);
    }

    public function loginForm(){
        $this->isPostMethod();

        $params = $_POST;
        $errors = $this->usersModel->validateLogin($params);
        if(!empty($errors)){
            $params = [
                'errors' => $errors,
                'userForm' => $params
            ];
            return $this->login($params);
        }

        $codition = [
            'username' => $params['username'],
            'password' => Controller::hash($params['password'])
        ];

        $userData = $this->usersModel->where($codition)->one();
        if($userData['flag_deactive']){
            $params = [
                'errors' => ['User "' . $params['username'] . '" has diactived!'],
            ];
            return $this->login($params);
        }
        $userData = new Users($userData);
        Session::set('user_data', $userData);
        if(Users::can('admin')){
            $this->redirect(BASE_URL . 'admin/?controller=home');
        }
        $this->redirect(BASE_URL . '?controller=home');
    }

    public function logout(){
        Users::logout();
        return $this->redirect(BASE_URL . '?controller=user&action=login');
    }

}