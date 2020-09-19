<?php

class UsersModels extends Models{
    protected $table = 'users';

    public function validateRegister($params){
        $errors = [];
        if($params['birthday'] != '' && !validateDate($params['birthday'], 'd/m/Y')){
            $errors[] = 'Type of birthday not correct!';
        }
        if($params['phone'] != '' && !validatePhone($params['phone'])){
            $errors[] = 'Type of phone not correct!';
        }
        if($params['username'] == ''){
            $errors[] = 'Username cannot empty!';
        }
        if($params['password'] == ''){
            $errors[] = 'Password cannot empty!';
        }elseif($params['password'] != $params['re_password']){
            $errors[] = 'Passwo`rd and Re-Password not same!';
        }
        if(empty($errors)){
            if($this->where(['username' => $params['username']])->count() > 0){
                $errors[] = 'Username has exists!';
            }
        }
        return $errors;
    }

    public function validateLogin($params){
        $errors = [];
        if($params['username'] == '' || $params['password'] == ''){
            $errors[] = 'Username or password empty!';
        }
        if(empty($errors)){
            $codition = [
                'username' => $params['username'],
                'password' => Controller::hash($params['password'])
            ];
            if($this->where($codition)->count() <= 0){
                $errors[] = 'Username or password not correct!';
            }
        }
        return $errors;
    }
}