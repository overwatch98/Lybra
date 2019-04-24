<?php
require 'php/_home.php';
ob_start();
Lybra\App::setTitle("Accueil");
?>
<div class="banniere">
    <img src="<?= LOGO ?>banniere.jpg" class="embed-responsive" alt="">
    <div class="banniere-block">
        <h1>Bienvenu sur le site du lyceé de Boubara</h1>
        <p>Notre devise c'est : <em>Moralité-Persevérance-Succès</em> </p>
    </div>
</div>
<div class="container mt-5 min-h">
    <h1 class="text-center mb-4">Les derniers posts</h1>
    <div class="row">
        <?php foreach($posts as $post): ?>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <h2><?= $post->title ?></h2>
            <p><?= $post->content ?></p>
        </div>
        <?php endforeach ; ?>
    </div>
</div>
<?php 
$content = ob_get_clean();
require TEMPLATE;
?>
