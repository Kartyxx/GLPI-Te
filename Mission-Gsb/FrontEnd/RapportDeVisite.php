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
    <label for="praNum">Practitien :</label>


    <select id="praticien" name="praticien">
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
   


    <label for="medicament1">Médicament 1 :</label>
    <select id="medicament1" name="medicament1">
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
    <label for="medicament2">Médicament 2 :</label>
    <select id="medicament2" name="medicament2">
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
    
    <br><br>
    

    <label for="echantillon1">echantillon 1 :</label>
    <select id="echantillon1" name="echantillon1">
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
    <label for="echantillon2">echantillon 2 :</label>
    <select id="echantillon2" name="echantillon2">
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

    <?php
  // Générer cinq boutons radio pour la notation sur 5
  for ($i = 1; $i <= 5; $i++) {
    echo '<input type="radio" id="note' . $i . '" name="note" value="' . $i . '">';
    echo '<label for="note' . $i . '">' . $i . '</label><br>';
  }
  ?>




  
        <p class="contenu">
        <label for="rapBilan">Bilan du Rapport</label>
            <textarea id="rapBilan" name="rapBilan" rows="5" cols="33">
                Rentrez votre rapport de Bilan
            </textarea>
        </p>



        <label for="rapMotif">Motif du Rapport</label>
        <select name="motif_visite">
  <option value="1">Périodicité</option>
  <option value="2">Nouveautés ou actualisations</option>
  <option value="3">Remontage</option>
  <option value="4">Demande du médecin</option>
  <option value="5">Autre</option>
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
