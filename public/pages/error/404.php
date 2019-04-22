<?php
require 'php/home.php';
ob_start();
Lybra\App::setTitle("Erreur 404");
?>
<div class="container min-h">

<div class="alert alert-danger text-center mt-5">
    <h5><?= $e->getMessage(); ?></h5>
</div>

</div>
<?php 
$content = ob_get_clean();
require TEMPLATE;
?>