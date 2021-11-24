<?php
Lybra\App::setTitle("Accueil");
?>
<div class="banniere">
    <img src="<?= LOGO ?>banniere.jpg" class="embed-responsive" alt="">
    <div class="banniere-block">
        <h1>Bienvenu sur le site du lyceé de Boubara</h1>
        <p>Notre devise c'est : <em>Moralité-Persevérance-Succès</em> </p>
    </div>
</div>
<div class="container mt-5">
    <h1 class="text-center mb-4 home-title">Les derniers posts</h1>
    <hr>
    <br>
    <div class="row">
        <?php foreach($posts as $post): ?>
        <div class="col-lg-4 col-md-4 col-sm-12 card p-2">
            <h3 class="text-center home-title"><?= $post->title ?></h3>
            <p class="m-4"><?= substr($post->content, 0, 250) ?></p>
        </div>
        <?php endforeach ; ?>
    </div>
    <br>
</div>