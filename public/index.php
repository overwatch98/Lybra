<?php
require '../vendor/autoload.php';
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
try {
    $uri = '';
    $uri = $_SERVER['REQUEST_URI'];
    $uri = trim($uri, '/');
    
    if($uri === 'accueil' || $uri === 'accueil.html' || $uri === 'home'){
        require PAGE.'homeView.php';
    }
    elseif($uri === 'professeur' || $uri === 'professeur.html' || $uri === 'prof'){
        require PAGE . 'prof.php';
    }
    elseif($uri === 'apropos' || $uri === 'apropos.html' || $uri === 'about'){
        require PAGE . 'aboutView.php';
    }
    elseif($uri === 'contact' || $uri === 'contact.html' || $uri === 'nous-contacter'){
        require PAGE . 'contact.php';
    }
    elseif($uri === 'mouhamedamine' || $uri === 'quisuisje'){
        require CV . 'cv.php';
    }
    elseif($uri === 'login'){
        require PAGE . 'loginView.php';
    }
    elseif($uri === 'ajoutdeprof'){
        require ADMIN . 'addprof.php';
    }
    elseif($uri === 'admin'){
        require ADMIN . 'home.php';
    }
    elseif($uri === 'sedeconnecter'){
        unset($_SESSION['auth']);
        redirect('login');
    }
    else{
        throw new Exception("La page que vous avez demandé n'existe pas ");
    }
}catch(Exception $e){
    require PAGE . 'error/404.php';
}