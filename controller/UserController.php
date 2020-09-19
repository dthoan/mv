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

    public function index(){
    }

    public function register($params = []){
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
        $userData = new Users($userData);
        Session::set('user_data', $userData);
        return $this->redirect(BASE_URL . '?controller=user');
    }

}