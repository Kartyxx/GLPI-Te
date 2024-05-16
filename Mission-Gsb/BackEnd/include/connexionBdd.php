<?php
	// D�finitions de constantes pour la connexion � MySQL
	$hote= "localhost";
	$login= "adminclem";
	$mdp="Azerty31";
	$nombd="gsb-cr";

	// Connection au serveur
	try { 
		$connexion = new PDO("mysql:host=$hote;dbname=$nombd", $login, $mdp); 
	} 
	catch ( Exception $e ) {
		echo "Erreur de connexion : " . $e->getMessage();
	}
?>
