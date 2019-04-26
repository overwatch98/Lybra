<?php
require '../vendor/autoload.php';
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
try {
   
    if (isset($_GET['url'])){
        $url = $_GET['url'];
    }else{
        $url = "accueil";
    }
    
    if($url === 'accueil' || $url === 'accueil.html' || $url === 'home'){
        require PAGE.'homeView.php';
    }
    elseif($url === 'professeur' || $url === 'professeur.html' || $url === 'prof'){
        require PAGE . 'prof.php';
    }
    elseif($url === 'apropos' || $url === 'apropos.html' || $url === 'about'){
        require PAGE . 'aboutView.php';
    }
    elseif($url === 'contact' || $url === 'contact.html' || $url === 'nous-contacter'){
        require PAGE . 'contact.php';
    }
    elseif($url === 'mouhamedamine' || $url === 'quisuisje'){
        require CV . 'cv.php';
    }
    elseif($url === 'login'){
        require PAGE . 'loginView.php';
    }
    elseif($url === 'ajoutdeprof'){
        require ADMIN . 'addprof.php';
    }
    elseif($url === 'admin'){
        require ADMIN . 'home.php';
    }
    elseif($url === 'sedeconnecter'){
        unset($_SESSION['auth']);
        redirect('login');
    }
    else{
        throw new Exception("La page que vous avez demandé n'existe pas ");
    }
}catch(Exception $e){
    require PAGE . 'error/404.php';
}