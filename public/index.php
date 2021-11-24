<?php
use Lybra\App;
require '../vendor/autoload.php';
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
try {

    $uri = $_SERVER['REQUEST_URI'];
    
    if($uri === '/accueil' || $uri === '/'){
        $controller = new \Lybra\Controller\PostController;
        $controller->index();
    }
    elseif($uri === '/professeur'){
        $controller = new \Lybra\Controller\ProfController;
        $controller->index();
    }
    elseif($uri === '/apropos'){
        $controller = new \Lybra\Controller\PostController;
        $controller->about();
    }
    elseif($uri === '/contact' ){
        $controller = new \Lybra\Controller\PostController;
        $controller->contact();
    }
    elseif($uri === '/mouhamedamine' || $uri === '/quisuisje'){
        require_once CV . 'cv.php';
    }
    elseif($uri === '/login'){
        $controller = new \Lybra\Controller\UsersController;
        $controller->login();
    }
    elseif($uri === '/ajoutdeprof'){
        $controller = new \Lybra\Controller\Admin\ProfController;
        $controller->add();
    }
    elseif($uri === '/admin'){
        require ADMIN . 'home.php';
    }
    elseif($uri === '/sedeconnecter'){
        unset($_SESSION['auth']);
        App::redirect('/login');
    }
    else{
        throw new Exception("La page que vous avez demandé n'existe pas ");
    }
}catch(Exception $e){
    require PAGE . 'error/404.php';
}