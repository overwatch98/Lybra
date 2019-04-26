<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];
define('HOST', 'http://' . $host . '/lybra');
define('ROOT', $root . '/lybra');
define('TEMPLATE', 'pages/template/default.php');
define('CSS', 'assets/css/');
define('JS', 'assets/js/');
define('ADMINTEMPLATE', '../backend/template/admin.php');
define('PAGE', 'pages/');
define('ADMIN', '../backend/');
define('CV', '../cv/');
define('LOGO', 'logo/');
define('IMG', 'img/');
define('BASE', 'http://' . $host . '/lab/lybra/public/');