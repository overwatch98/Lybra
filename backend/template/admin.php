<?php use Lybra\App; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<base href="<?= BASE ?>">
    <link rel="stylesheet" href="<?= CSS ?>default.css">
    <link rel="stylesheet" href="<?= CSS ?>lybra.css">
    <link rel="stylesheet" href="<?= CSS ?>bootstrap.min.css">
    <title><?= App::getTitle() ?></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<h1 class="navbar-brand logo"><?= App::getLink("Lybra") ?></h1>
			<button type="button" class="navbar-toggler mb-2" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expand="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon btn-nav"> <img src="logo/menu.png" alt=""> </span>
	        </button>
			<div class="collapse navbar-collapse mr-0" id="mynav">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="/accueil">Voir le site</a></li>
					<li class="nav-item"><a class="nav-link" href="/ajoutdeprof">Gestion des prof</a></li>
					<?php if (isset($_SESSION['auth'])) : ?>
					<li class="nav-item"><a class="nav-link" href="/sedeconnecter">Se déconnecter</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>
    
    <?= $content ?>

    <footer>
		<div class="container">
			<h3>Lycée de Boubara</h3>
			<p><strong><?= App::getLink("Lybra") ?> </strong> est un site internet pour le lyceé de Boubara. Immaginé par <strong>Mr. Nana Nana</strong> professeur d'informatique et l'élève <strong><?= App::getLink('Mouhamed Amine') ?></strong> et conçu par <strong><?= App::getLink('Mouhamed Amine') ?></strong></p>
		</div>
		<p class="copy-r">Copyright © <?= App::getLink("Lybra") ?> tout droit reservé</p>
	</footer>  
	<script type="text/javascript" src="<?= JS ?>jquery.min.js"></script>
    <script type="text/javascript" src="<?= JS ?>bootstrap.min.js"></script>    
</body>
</html>