<?php
    session_save_path("session");
  session_start();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultats du médicament</title>
    <link rel="stylesheet" type="text/css" href="css/cssGeneral.css">
</head>
<body>
<?php
// Appel du script de connexion 
require("include/connexionBdd.php");

// Variable pour le nom du médicament
$medicament = $_POST['medoc'];

// Écriture de la requête d'extraction SQL
$reqSQL = "SELECT * FROM medicament WHERE medNomcommercial = '$medicament'";

// Envoi de la requête
$resultat = $connexion->query($reqSQL);

// Vérification si le résultat est faux
if ($resultat === false) {
    echo "Médicament non trouvé";
} else {
    // Récupération de la première ligne de résultat
    $ligne = $resultat->fetch();

	$nom=$ligne[1];
	$Composition=$ligne[2];
	$Effet= $ligne[3];
	$Prevention= $ligne[4];

	$nom = "<strong>" . $ligne[1] . "</strong>";
	$Composition = "<strong>" . $ligne[2] . "</strong>";
	$Effet = "<strong>" . $ligne[3] . "</strong>";
	$Prevention = "<strong>" . $ligne[4] . "</strong>";


    // Si la ligne est vide
    if (!$ligne) {
        echo "Médicament non trouvé";
    } else {
        // Affichage des résultats avec style et encodage UTF-8
        echo "<table>";
        echo "<tr class='separateur'><td>Nom :</td><td>" . utf8_encode($nom) . "</td></tr>";
        echo "<tr class='separateur'><td>Composition :</td><td>" . utf8_encode($Composition) . "</td></tr>";
        echo "<tr class='separateur'><td>Effets :</td><td>" . utf8_encode($Effet) . "</td></tr>";
        echo "<tr class='separateur'><td>Prévention :</td><td>" . utf8_encode($Prevention) . "</td></tr>";
        echo "</table>";
    }
}
?>
</body>
</html>








