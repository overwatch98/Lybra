<?php 

namespace Lybra\User;

class Auth{

    public function connect($uername, $password){
        if(isset($username, $password) && !empty($username) && !empty($password)){
            $db = App::getDb();
            $user = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?", [$username, $password])->fetch();
           if ($user){ 
               session_start();
              $_SESSION['auth'] = $user;
           }
        }
    }


}