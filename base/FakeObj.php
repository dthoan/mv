<?php

class FakeObj extends stdClass{
    public function __call($closure, $args){
        return call_user_func_array($this->{$closure}, $args);
    }
}