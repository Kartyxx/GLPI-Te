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
    $rapNum="";
    $praNum="";
    $rapDate="";
    $rapBilan="";
    $rapMotif="";


    $matricule = $_POST["matricule"];
    $rapNum = $_POST["rapNum"];
    $praNum = $_POST["praNum"];
    $rapDate = $_POST["rapDate"];
    $rapBilan = $_POST["rapBilan"];
    $rapMotif = $_POST["rapMotif"];

    // Convertir la date de naissance au format aaaa-mm-jj
    $rapDate = substr($rapDate,6,4) . "-" . substr($rapDate,3,2) . "-" . substr($rapDate,0,2);



	$reqSQL = "UPDATE rapportvisite
    SET visMatricule = '$matricule',praNum='$praNum',rapDate='$rapDate ',rapBilan ='$rapBilan', rapMotif='$rapMotif'
    WHERE rapNum = $rapNum";




    // Affichage de la requ�te dans la fen�tre du navigateur
    echo $reqSQL ."<hr />";

	// Ex�cution de la requ�te
	$connexion->exec($reqSQL);

	// Affichage d'un message d'information ainsi que le num�ro de l'�l�ve cr��
	echo "Votre rapport a bien etait modifier";

    
?>
</body>
</html>