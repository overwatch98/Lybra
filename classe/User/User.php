<?php 

namespace Lybra\User;

use Lybra\App;


class User {

    private $data;
    private $erros = '';

    public function __construct($data){
        $this->data = $data;
    }

    public function isValid($field, $erroMsg){
        if(isset($this->data[$field]) && !empty($this->data[$field])){
            
        }
    }

    public function getUser($field){
        App::getDb()->prepare("SELECT * FROM users WHERE username = ? AND password = ?", [$username, $password]);
    }

}