<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];
define('HOST', 'http://' . $host . '/lybra');
define('ROOT', '../');   
define('TEMPLATE', '../views/template/default.php');
define('CSS', 'assets/css/');
define('JS', 'assets/js/');
define('ADMINTEMPLATE', '../backend/template/admin.php');
define('PAGE', '../views/');
define('ADMIN', '../backend/');
define('CV', '../views/cv/');
define('LOGO', 'logo/');
define('IMG', 'img/');
define('BASE', 'http://' . $host );