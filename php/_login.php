<?php
use Lybra\App;
$error = "";
if(!empty($_POST)){
    extract($_POST);

    if(isset($username, $password) && !empty($username) && !empty($password)){
        $password = sha1($password);
        $db = App::getDb();
        $user = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?", [$username, $password])->fetch();
       if ($user){ 
          $_SESSION['auth'] = $user;
          redirect('admin');
       }else{
           $error = "Identifiant ou mote de passe incorect";
       }
    }

}