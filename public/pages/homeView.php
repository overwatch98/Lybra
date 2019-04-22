<?php
require 'php/_home.php';
ob_start();
foreach($posts as $post){
Lybra\App::setTitle($post->title);
?>
<div class="banniere">
    <img src="<?= LOGO ?>banniere.jpg" class="embed-responsive" alt="">
    <div class="banniere-block">
        <h1>Bienvenu sur le site du lyceé de Boubara</h1>
        <p>Notre devise c'est : <em>Moralité-Persevérance-Succès</em> </p>
    </div>
</div>
<div class="container min-h">

    <h1><?= $post->title ?></h1>
    <p><?= $post->content ?></p>

</div>
<?php 
}
$content = ob_get_clean();
require TEMPLATE;
?>
