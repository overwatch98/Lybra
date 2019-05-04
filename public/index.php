<?php
use Lybra\App;
require '../vendor/autoload.php';
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
try {

    $uri = $_SERVER['REQUEST_URI'];
    
    if($uri === '/accueil' || $uri === '/'){
        require PAGE.'homeView.php';
    }
    elseif($uri === '/professeur'){
        require PAGE . 'prof.php';
    }
    elseif($uri === '/apropos'){
        require PAGE . 'aboutView.php';
    }
    elseif($uri === '/contact' ){
        require PAGE . 'contact.php';
    }
    elseif($uri === '/mouhamedamine' || $uri === '/quisuisje'){
        require CV . 'cv.php';
    }
    elseif($uri === '/login'){
        require PAGE . 'loginView.php';
    }
    elseif($uri === '/ajoutdeprof'){
        require ADMIN . 'addprof.php';
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