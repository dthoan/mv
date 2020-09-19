<?php

use \duncan3dc\Sessions\Session;

class Users{
    public $user;
    public function __construct($userData){
        $this->user = new FakeObj();
        foreach ($userData as $key => $data){
            $this->user->{$key} = $data;
        }
    }

    public function __call($closure, $args){
        return call_user_func_array($this->{$closure}, $args);
    }

    public static function can($action){
        $usersModels = new UsersModels();
        $permisionModels = new PermissionModels();
        $permision = $usersModels->one(['id' => static::get()->id])['permisions'] ?? '';
        $permision = $permisionModels->buildPermission($permision);
        return in_array(strtolower($action), $permision);
    }

    public static function get(){
        Session::name('UserLogin');
        $userData = Session::get('user_data')->user ?? new stdClass();
        $userData->logined = count((array)$userData) > 0;
        return $userData;
    }

    public static function isLogin(){
        return !!static::get()->logined;
    }

    public static function logout(){
        Session::name('UserLogin');
        Session::clear();
        return true;
    }
}