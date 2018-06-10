<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mini Site - Catalogue</title>
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="container-mobile-1-tablette-desktop-12">
	
	<?php include("menu.php"); ?>
	
	<div class="filAriane green container-mobile-1-tablette-desktop-12-tab-12-big-12">
			<p class="-tab-12-big-12">VOUS ÊTES ICI: <a href="contact.php">CONTACT</a></p>
	</div>
	<main class="container-mobile-1-tablette-desktop-12-tab-12-big-12">
		<section class="-tab-12-big-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.1414889626417!2d5.55828945130164!3d50.64306338124775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0fa164d342d39%3A0xa33e2d934b144ff1!2sInstitut+Saint-Laurent+de+Promotion+Sociale!5e0!3m2!1sfr!2sbe!4v1528396467475" frameborder="0" allowfullscreen></iframe>	
		</section>
		<section class="container-mobile-1-tablette-desktop-12-tab-12-big-12 hauteur">
			<div class="description green -tab-12-big-4">
				<h2 class="lightgreen">Infos contact!</h2>
				<div>
					<p><strong>Adresse:</strong></p>
					<p>33 Rue Saint-Laurent, 4000 Liège</p>
					<p><strong>Email:</strong></p>
					<p>vintage@lab.com</p>
					<p><strong>Tél:</strong></p>
					<p>+32 4 223 11 31</p>
					<p><strong>Site:</strong></p>
					<p><a href="index.php" title="le site Vintage Lab">wwww.vlab.com</a></p>
				</div>
			</div>
			<div class="description green -tab-12-big-8">
				<h2 class="lightgreen">Contactez-nous!</h2>
				<form name="contact" action="#" method="POST" class="container-mobile-1-tablette-desktop-12 formulaire description">
					<textarea class="-tab-6-big-6" placeholder="un commentaire ?"></textarea>
					<div class="container-mobile-1 -tab-6-big-6">
						<label for="nom">Nom:</label>
						<input class="big-11" type="text" name="nom" id="nom" value="">
						<label  for="prenom">Prénom:</label>
						<input class="big-11" type="text" name="prenom" id="prenom" value="">
						<label class="big-2" for="email">E-mail:</label>
						<input class="big-11" type="text" name="email" id="email" value="">
						<div class="container-mobile -desktop-12 -big-12 checkbox">
							<input type="checkbox" name="news" id="news" checked value="">
							<label class="news -big-8" for="news">Je désire recevoir la newsletter</label>
						</div>
						<input class="-tab-12-big-6" type="submit" name="send" value="Envoyer">
					</div>
				</form>

				
			</div>
		</section>
			
	</main>
</body>
</html>