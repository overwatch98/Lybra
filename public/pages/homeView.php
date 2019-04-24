<?php
require 'php/home.php';
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
<div class="container min-h">
    <?php foreach($posts as $post): ?>
    <h1><?= $post->title ?></h1>
    <p><?= $post->content ?></p>
    <?php endforeach ; ?>
</div>
<?php 
$content = ob_get_clean();
require TEMPLATE;
?>
