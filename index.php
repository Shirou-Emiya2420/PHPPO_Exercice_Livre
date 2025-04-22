<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ExoLivre</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
	require_once "Livre.php";
	require_once "Auteur.php";
	// Livres de Stephen King
	$auteur1 = new Auteur("King", "Stephen", new DateTime("1947-09-21"));
	$auteur2 = new Auteur("Rowling", "J.K.", new DateTime("1965-07-31"));
	$auteur3 = new Auteur("Tolkien", "J.R.R.", new DateTime("1892-01-03"));
	
	// Livres de Stephen King
	new Livre("Carrie", $auteur1, 199, 1974, 15.99);
	new Livre("Shining", $auteur1, 447, 1977, 18.99);
	new Livre("Le Fléau", $auteur1, 823, 1978, 22.50);
	new Livre("Simetierre", $auteur1, 374, 1983, 17.00);
	new Livre("Ça", $auteur1, 1138, 1986, 25.00);
	new Livre("Misery", $auteur1, 338, 1987, 16.50);
	new Livre("La Ligne verte", $auteur1, 592, 1996, 19.99);
	new Livre("22/11/63", $auteur1, 849, 2011, 24.00);
	new Livre("Docteur Sleep", $auteur1, 531, 2013, 20.00);
	new Livre("L'Institut", $auteur1, 576, 2019, 21.50);
	
	// Livres de J.K. Rowling
	new Livre("Harry Potter à l'école des sorciers", $auteur2, 223, 1997, 14.99);
	new Livre("Harry Potter et la Chambre des secrets", $auteur2, 251, 1998, 14.99);
	new Livre("Harry Potter et le Prisonnier d'Azkaban", $auteur2, 317, 1999, 14.99);
	new Livre("Harry Potter et la Coupe de feu", $auteur2, 636, 2000, 16.99);
	new Livre("Harry Potter et l'Ordre du phénix", $auteur2, 766, 2003, 16.99);
	new Livre("Harry Potter et le Prince de sang-mêlé", $auteur2, 607, 2005, 16.99);
	new Livre("Harry Potter et les Reliques de la Mort", $auteur2, 607, 2007, 16.99);
	new Livre("Une place à prendre", $auteur2, 512, 2012, 18.99);
	new Livre("L'Ickabog", $auteur2, 304, 2020, 15.99);
	new Livre("Le cochon de Noël", $auteur2, 320, 2021, 15.99);
	
	// Livres de J.R.R. Tolkien
	new Livre("Le Hobbit", $auteur3, 310, 1937, 13.99);
	new Livre("La Communauté de l'anneau", $auteur3, 423, 1954, 15.99);
	new Livre("Les Deux Tours", $auteur3, 352, 1954, 15.99);
	new Livre("Le Retour du roi", $auteur3, 416, 1955, 15.99);
	new Livre("Le Silmarillion", $auteur3, 365, 1977, 17.99);
	new Livre("Les Enfants de Húrin", $auteur3, 313, 2007, 16.99);
	new Livre("Beren et Lúthien", $auteur3, 288, 2017, 16.99);
	new Livre("La Chute de Gondolin", $auteur3, 304, 2018, 16.99);
	new Livre("Les Lais du Beleriand", $auteur3, 400, 1985, 17.99);
	new Livre("Contes et légendes inachevés", $auteur3, 472, 1980, 18.99);
	$auteur1->affAge(); 	$auteur2->affAge(); 	$auteur3->affAge(); echo $auteur1; echo $auteur2; echo $auteur3;
	?>


</body>
</html>