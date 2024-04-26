<?php
	session_save_path("../BackEnd/session");
  session_start();
?>
 <?php
	include("../BackEnd/include/connexionBdd.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
  <meta charset="utf-8">
	<title>Inscription</title >
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="css/cssGeneral.css"></link>
    <script type="text/javascript" language="JavaScript" src="includes/controleFormulaire.js"></script> 
</head>

<body>
  <table   style="width: 100%">
    <tr>
      <td style="width: 50%; text-align: right;"><h1>Rapport Visite&nbsp;&nbsp;</h1></td>
    </tr>
  </table>

  <p><br /></p>
  <form name="inscription" action="../BackEnd/InsertionRapportVisite.php" method ="post">

  	<fieldset class="separateur"><legend class="legende">Infos personnelles</legend>
         <table>
            <tr>
              <td><label for="matricule">Matricule de visite: </label></td>
              <td><?php echo $_SESSION['num']; ?> </td>
            </tr>
    <label for="praNum">Practitien :</label>
    <select id="praticien" name="classe">
    <?php

    $reqSQL2 = "select praPrenom, praNom, praNum from praticien";
    $resultP=$connexion->query($reqSQL2);
    $ligneP = $resultP->fetch();
    while ($ligneP!= false)
    { 
    $idP= $ligneP["praNum"]; 
    $libP= $ligneP["praPrenom"]; 
    $libN= $ligneP['praNom'];
    echo "<option value='$idP'>$libP $libN</option>";
    $ligneP = $resultP->fetch();
    }
    ?>
    </select>

            <tr>
              <td><label for="rapDate">Date du Rapport : </label>
                  <span class="note"><br /></span></td>
              <td><?php echo $date = date("Y-m-d"); ?></td>
            </tr>
          </table>
  	</fieldset>

  	<br />
   


    <label for="medicaments">Choisissez un médicament :</label>
    <select id="medicament" name="classe">
    <?php

    $reqSQL1 = "select medNomcommercial, medDepotLegal  from medicament";
    $result=$connexion->query($reqSQL1);
    $ligne = $result->fetch();
    while ($ligne!= false)
    { 
    $id= $ligne["medDepotLegal"]; 
    $lib= $ligne["medNomcommercial"]; 
    echo "<option value='$id'>$lib</option>";
    $ligne = $result->fetch();
    }
    ?>
    </select>
    

  	<fieldset class="separateur"><legend class="legende">Infos classe</legend>
        <p class="contenu">
        <label for="rapBilan">Bilan du Rapport</label>
            <textarea id="rapBilan" name="rapBilan" rows="5" cols="33">
                Rentrez votre rapport de Bilan
            </textarea>
        </p>
        <p class="contenu">
        <label for="rapMotif">Motif du Rapport</label>
        <select name="motif_visite">
  <option value="periodicite">Périodicité</option>
  <option value="nouveautes_actualisations">Nouveautés ou actualisations</option>
  <option value="remontage">Remontage</option>
  <option value="demande_medecin">Demande du médecin</option>
  <option value="autre">Autre</option>
</select>

        </p>
  	</fieldset>

  	<p>
  		<input class="bouton" type="submit" id="envoie" name="boutonValider" value="Envoyer" />
        <input class="bouton" type="reset" id="annule" name="boutonAnnuler" value="Annuler" />
  	</p>
  </form>
</body>
</html>
