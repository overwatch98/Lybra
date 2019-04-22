<?php
use Lybra\App;
if(!empty($_POST)){
$db = App::getDb();
    extract($_POST);

    if(isset($username) && !empty($username)){
        $user = $db->prepare("SELECT * FROM users WHERE username = ? ", [$username])->fetch();
       if (sha1($password) == $user->password){
           
          $_SESSION['auth'] = $user;
          redirect('admin');
       }else{
           die('pas ok');
       }
    }

}