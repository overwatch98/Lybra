<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<base href="<?= BASE ?>">
    <link rel="stylesheet" href="public/assets/css/default.css">
    <link rel="stylesheet" href="public/assets/css/lybra.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <title><?= Lybra\App::getTitle() ?></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<h1 class="navbar-brand logo"><?= getLink("Lybra") ?></h1>
			<button type="button" class="navbar-toggler mb-2" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expand="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon btn-nav"> <img src="public/logo/menu.png" alt=""> </span>
	        </button>
			<div class="collapse navbar-collapse mr-0" id="mynav">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="accueil.html">Accueil</a></li>
					<li class="nav-item"><a class="nav-link" href="professeur.html">Professeurs</a></li>
					<li class="nav-item"><a class="nav-link" href="apropos.html">À propos</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
					<?php if (isset($_SESSION['auth'])) : ?>
					<li class="nav-item"><a class="nav-link" href="admin">ADMINISTRATION</a></li>
					<?php endif ; ?>
				</ul>
			</div>
		</div>
	</nav>
    
    <?= $content ?>

    <footer>
		<div class="container">
			<h3>Lycée de Boubara</h3>
			<p><strong><?= getLink("Lybra") ?> </strong> est un site internet pour le lyceé de Boubara. Immaginé par <strong>Mr. Nana Nana</strong> professeur d'informatique et l'élève <strong><?= getLink('Mouhamed Amine') ?></strong>. Conçu et realisé par <strong><?= getLink('Mouhamed Amine') ?></strong></p>
		</div>
		<p class="copy-r">Copyright © <?= getLink("Lybra") ?> tout droit reservé</p>
	</footer>  
	<script type="text/javascript" src="public/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/assets/js/bootstrap.min.js"></script>  
</body>
</html>