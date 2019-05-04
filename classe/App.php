<?php
namespace Lybra;
require '../config/Database.php';

class App{

    private static $title = "";
    private static $db;

    public static function getDb(){
        if(self::$db === null){
            self::$db = new \Database('root', '');
        }
        return self::$db;
    }

    public static function setTitle($title){
        if(is_string(self::$title)){
            self::$title = $title;
        }
    }

    public static function getTitle(){
        return self::$title;
    }

    public static function redirect($page){
        header('Location: ' . $page);
        exit();
    }

    public static function getLink($link){
        if ($link === 'Mouhamed Amine'){
            return '<a href="quisuisje" style="color:#eee; text-decoration:none">' . $link . '</a>';
        }else{
            return '<a href="accueil" style="color:#eee; text-decoration:none">' . $link . '</a>';
        }
    }

    public static function isLogged(){
        if(!isset($_SESSION['auth'])){
            self::redirect('login');
        }
    }

}