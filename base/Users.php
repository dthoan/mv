<?php

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

    public function can($action){
        $permision = $this->user->permisions;
        $permision = explode('|', $permision);
        return in_array(strtolower($action), $permision);
    }
}