<?php
namespace Mike99;

class User{
    private $user = null;
    public function setUser($data = []){
        $this->user = $data;
    }

    public function getName(){
        return $this->user['name'];
    }
}