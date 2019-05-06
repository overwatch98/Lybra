<?php 

namespace Lybra\Controller;

use Lybra\Controller;
use Lybra\User\Auth;
use Lybra\App;


class UsersController extends Controller{

    public function login(){
        $error = "";
        if(!empty($_POST)){
            extract($_POST);
            $db = App::getDb();

            $auth = new Auth($db);
            $auth->login($username, $password);
            $error = $auth->getError();
        }
        $this->render('views.login', compact('error'));
    }

}