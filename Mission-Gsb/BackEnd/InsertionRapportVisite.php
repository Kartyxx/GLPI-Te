<?php
	session_save_path("session");
  session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
	<title>Inscription</title>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/cssGeneral.css"></link>
</head> 

<body>
<?php
    include("include/connexionBdd.php");

	$matricule="";  
    $praNum="";
    $rapDate="";
    $rapBilan="";
    $rapMotif="";


    $matricule = $_SESSION['num'];
    $praNum = $_POST["praNum"];
    $rapDate = date('Y-m-d');
    $rapBilan = $_POST["rapBilan"];
    $rapMotif = $_POST["rapMotif"];



	$reqSQL = "INSERT INTO rapportvisite (visMatricule, praNum, rapDate, rapBilan, rapMotif)
    VALUES ('$matricule', '$praNum', '$rapDate' , '$rapBilan', '$rapMotif')";




    // Affichage de la requ�te dans la fen�tre du navigateur
    echo $reqSQL ."<hr />";

	// Ex�cution de la requ�te
	$connexion->exec($reqSQL);

	// Affichage d'un message d'information ainsi que le num�ro de l'�l�ve cr��
	echo "Votre rapport a bien etait creer";

    
?>
</body>
</html>