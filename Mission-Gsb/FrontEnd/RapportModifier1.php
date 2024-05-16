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
	<title>Inscription</title >
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="css/cssGeneral.css"></link>
    <script type="text/javascript" language="JavaScript" src="includes/controleFormulaire.js"></script> 
</head>

<body>
<?php
	include("include/GSB_UpperBody.php");
	?>
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
            <tr>
              <td><label for="praNum">Practitien :</label></td>
              <td><input type="text" id="praNum" name="praNum" maxlength="5" size="5" /></td>
            </tr>

            <tr>
              <td><label for="rapDate">Date du Rapport : </label>
                  <span class="note"><br />(format jj/mm/aaaa)</span></td>
              <td><?php echo $date = date("Y-m-d"); ?></td>
            </tr>
          </table>
  	</fieldset>

  	<br />
   


    <label for="medicaments">Médicament 1 :</label>
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
    <label for="medicaments">Médicament 2 :</label>
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
        <label for="rapMotif">Choisissez un motif de rapport:</label>
        <select name="rapMotif" id="rapMotif">
  <option value="1">Périodicité </option>
  <option value="2">Chute de prescription</option>
  <option value="3">Nouveautés ou actualisations</option>
  <option value="4">Demande du médecin</option>
  <option value="5">autre</option>
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
