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
	// Livres de Stephen King
	$l1 = new Livre("Ca", "King", "Stephen", 1138, 1986, 20);
	$l2 = new Livre("Simetierre", "King", "Stephen", 374, 1983, 15);
	$l3 = new Livre("Le Fléau", "King", "Stephen", 823, 1978, 14);
	$l4 = new Livre("Shining", "King", "Stephen", 447, 1977, 16);

	// Autres auteurs
	$l5 = new Livre("1984", "Orwell", "George", 328, 1949, 12);
	$l6 = new Livre("Les Misérables", "Hugo", "Victor", 1463, 1862, 25);
	$l7 = new Livre("L'Étranger", "Camus", "Albert", 123, 1942, 10);
	
	$l1->afficherBibliographie($l1->getAuteur());
	?>


</body>
</html>