<?php
namespace Lybra;
require 'config/Database.php';

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

}