<?php
use Lybra\App;
ob_start();
App::setTitle('Administration');
App::isLogged();
?>

<div class="jumbotron">
    <h1 class="text-center text-primary">Zone reservé</h1>
</div>
<div class="container min-h">
    
</div>
<?php
$content = ob_get_clean();
require ADMINTEMPLATE;