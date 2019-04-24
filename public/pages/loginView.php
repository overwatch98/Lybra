<?php 
require 'php/_login.php';
Lybra\App::setTitle('Autentification');
ob_start();
?>

<div class="container mt-5 mb-5">
    <h3 class="text-center mb-5">Veuillez vous authentifiez</h3>
    <form action="" method="post" class="card form col-lg-6 col-md-6 col-sm-12">
        <?php if (!empty($error)) : ?>
            <div class="alert alert-danger mb-4">
                <?= $error ?>
            </div>
        <?php endif; ?>
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Identifiant">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </div>
    </form>
</div>

<?php
$content = ob_get_clean();
require TEMPLATE;