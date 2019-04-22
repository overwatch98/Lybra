<?php 
Lybra\App::setTitle('Autentification');
ob_start();
?>

<div class="container">
    <h1 class="text-center">A propos</h1>
</div>

<?php
$content = ob_get_clean();
require TEMPLATE;