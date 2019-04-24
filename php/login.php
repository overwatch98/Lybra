<?php
use Lybra\App;
if(!empty($_POST)){
$db = App::getDb();
    extract($_POST);

    if(isset($username) && !empty($username)){
        $user = $db->find('user', 'username', $username);
       if (sha1($password) == $user->password){
           
          $_SESSION['auth'] = $user;
          redirect('admin');
       }else{
           die('pas ok');
       }
    }

}