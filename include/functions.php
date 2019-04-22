<?php

if(!function_exists('getLink')){
    function getLink($link){
        if ($link === 'Mouhamed Amine'){
            return '<a href="quisuisje" style="color:#eee; text-decoration:none">' . $link . '</a>';
        }else{
            return '<a href="accueil" style="color:#eee; text-decoration:none">' . $link . '</a>';
        }
    }
}

if (!function_exists('redirect')){
    function redirect($page){
        header('Location: ' . $page);
        exit();
    }
}

if (!function_exists("isLogged")){
    function isLogged(){
        if(!isset($_SESSION['auth'])){
            redirect('login');
        }
    }
}