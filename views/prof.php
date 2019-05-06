<?php 
Lybra\App::setTitle('Liste des professeurs');
?>

<div class="container">
    <h1 class="text-center red-f mt-5 mb-5">Les professeurs du lycée de Boubara</h1>
    <div class="row">
        <?php foreach($profs AS $prof) : ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card-prof p-4 mb-2 mt-2 text-center">
                    <div class="avatar-prof">
                        <?php if (!empty($prof->avatar)): ?>
                            <img class="img img-thumbnail" src="avatar/<?= $prof->avatar ?>" alt="avatarprof">
                            <?php if(isset($_SESSION['auth'])) :?>
                                <a href="#">Modifier la photo</a>
                            <?php endif ; ?>
                        <?php else : ?>
                            <img class="img img-thumbnail" src="avatar/default.png" alt="avatarprof">
                            <?php if(isset($_SESSION['auth'])) :?>
                                <a href="#">Ajouter une photo</a>
                            <?php endif ; ?>
                        <?php endif ; ?>
                    </div>
                    <hr>
                    <h5 class="blue-f"><?= $prof->sexe ?> <?= $prof->firstName;?> <?= $prof->lastName ?></h5>
                    <em><?= $prof->statusprof ?></em>
                </div>
            </div>
        <?php endforeach ; ?>
    </div>
</div>