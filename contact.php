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
			<p class="-tab-12-big-12">VOUS ÊTES ICI: <a href="contact.php">CONTACT</p>
	</div>
	<main class="container-mobile-1-tablette-desktop-12-tab-12-big-12">
		<section class="container-mobile-1-tablette-desktop-12-tab-12-big-12">
					
		</section>
		<section class="container-mobile-1-tablette-desktop-12-tab-12-big-12">
			<div class="description -tab-12-big-4">
				<h2 class="lightgreen">Infos contact!</h2>
				<p class="green description"><strong>Adresse:</strong><br>33 Rue Saint-Laurent, 4000 Liège<br><strong>Email:</strong><br>vintage@lab.com<br><strong>Tél:</strong><br>+32 4 223 11 31<br><strong>Site:</strong><br><a href="index.php" title="le site Vintage Lab">wwww.vlab.com</a></p>
			</div>
			<div class="description -tab-12-big-8">
				<h2 class="lightgreen">Contactez-nous!</h2>
				<form name="contact" action="#" method="POST" class="container-mobile-1-tablette-desktop-12 green">
					<textarea placeholder="un commentaire ?" class="-tab-12-big-6"></textarea>
					<label class="-tab-12-big-6" for="nom">Nom:<input type="text" name="nom" id="nom" value=""></label>
					<label class="-tab-12-big-6" for="prenom">Prénom:<input type="text" name="prenom" id="prenom" value=""></label>
					<label class="-tab-12-big-6" for="email">E-mail:<input type="text" name="email" id="email" value=""></label>
					<label class="-tab-12-big-6" for="news"><input type="checkbox" name="news" id="news" value="">Je désire recevoir la newsletter</label>
					<input type="submit" name="send" value="Envoyer">
				</form>

				
			</div>
		</section>
			
	</main>
</body>
</html>