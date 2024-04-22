<?php
	session_save_path("session");
  session_start();
?>

<?php

// Appel du script de connexion au serveur et � la base de donn�es
    include("include/connexionBdd.php");

// On r�cup�re les donn�es saisies dans le formulaire
	$nomSaisi = $_POST['denomination'];
	$motPasseSaisi = $_POST['mot'];

// On r�cup�re dans la base de donn�es le mot de passe qui correspond au nom saisi par le visiteur
	$sql = "SELECT visNom, visDateembauche FROM collaborateurs WHERE visNom ='$nomSaisi'";
	$res = $connexion->query($sql);
	$ligne = $res->fetch();
	$DateEmbauche = $ligne[1];
	$nom = $ligne[0];
    $motPasseBdd = date('dmy', strtotime($DateEmbauche));
	echo ''.$nom.''.$motPasseBdd.'';
	if  ($motPasseSaisi==$motPasseBdd)
	// Le mot de passe est diff�rent de celui de la base utilisateur
	{
        echo "bienvenu dans la page";
		$_SESSION['nom']=$_POST['denomination'];
		echo $_SESSION['nom'];
		// On quitte le script courant sans effectuer les �ventuelles instructions qui suivent
	}
	else
	// Le mot de passe saisi correspond � celui de la base utilisateur
	{


        echo "Votre saisie est erronée, Recommencez SVP..."; 



	}

	// on ferme la connexion au SGBD
?>
