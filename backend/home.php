<?php
ob_start();
Lybra\App::setTitle('Administration');
isLogged();
?>


<?php
$content = ob_get_clean();
require ADMINTEMPLATE;