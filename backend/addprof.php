<?php 
require 'php/_addprof.php';
Lybra\App::setTitle('Autentification');
ob_start();

?>

<div class="container mt-5 mb-5">
    <h3 class="text-center mb-4 red-f">Ajouter un professeur<h3>
    <form action="" method="post" enctype="multipart/form-data" class="col-lg-6 col-md-8 col-sm-12 m-auto">
        <?php if (!empty($error)):?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif ; ?>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Mr ou Mme ..Nom" name="firstName">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Prenom" name="lastName">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Professeur de ...." name="status">
        </div>
        <div class="form-group">
            <label for="avatar">Photo</label>
            <input type="file" class="form-control-file" style="font-size: 14px;" id="avatar" name="avatar">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
</div>

<?php
$content = ob_get_clean();
require ADMINTEMPLATE;