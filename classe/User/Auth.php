<?php 

namespace Lybra\User;

use Lybra\App;

class Auth{

    private $db;
    private $errors = "";

    public function __construct(\Database $db){
        $this->db = $db;
    }

    public function login($username, $password){

        if(isset($username, $password) && !empty($username) && !empty($password)){
            $password = sha1($password);
            $user = $this->db->prepare("SELECT * FROM users WHERE username = ? AND password = ?", [$username, $password])->fetch();
            if($user){ 
                $_SESSION['auth'] = $user;
                App::redirect('/admin');
           }else {
            $this->errors = "Identifiant ou mot de passe incorect";
           }
        }else{
            $this->errors = "Veuillez remplir tous les champs !";
        }
    }
    
    public function getError(){
        return $this->errors; 
    }

}