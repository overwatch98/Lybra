<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];
define('HOST', 'http://' . $host . '/lybra');
define('ROOT', $root . '/lybra');
define('TEMPLATE', 'public/pages/template/default.php');
define('ADMINTEMPLATE', 'backend/template/admin.php');
define('PAGE', 'public/pages/');
define('ADMIN', 'backend/pages/');
define('LOGO', 'public/logo/');
define('IMG', 'public/img/');
define('BASE', 'http://' . $host . '/lab/lybra/');