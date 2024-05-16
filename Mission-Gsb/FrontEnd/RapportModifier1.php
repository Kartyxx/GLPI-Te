<?php
	session_save_path("../BackEnd/session");
  session_start();
?>
 <?php
	include("../BackEnd/include/connexionBdd.php");

?>


<?php
$rapNum=$_GET['rapNum'];
$reqSQL = "SELECT visMatricule, praNum, rapDate, rapBilan,idMotif ,medicament1,medicament2,echantillon1,echantillon2,note
 From rapportvisite 
 Where rapNum ='$rapNum'";
$resultat = $connexion->query($reqSQL);
$ligne = $resultat->fetch();

 
$matricule=$ligne[0];  
$praNum=$ligne[1];
$rapDate=$ligne[2];
$rapBilan=$ligne[3];
$rapMotif=$ligne[4];
$medicament1=$ligne[5];  
$medicament2=$ligne[6];
$echantillon1=$ligne[7];
$echantillon2=$ligne[8];
$note=$ligne[9];


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
  <form name="inscription" action="../BackEnd/ModifierFormulaire.php" method ="post">


  <input type="hidden" name="rapNum" value="<?php echo $rapNum ?>">

  	<fieldset class="separateur"><legend class="legende">Infos personnelles</legend>
         <table>
            <tr>
              <td><label for="matricule">Matricule de visite: </label></td>
              <td><?php echo $_SESSION['num']; ?> </td>
            </tr>
            <tr>
              <td><label for="praNum">Practitien :</label></td>
              <td><input type="text" id="praNum" name="praNum" maxlength="5" size="5" value ="<?php echo $rapNum ?>" /></td>
            </tr>

            <tr>
              <td><label for="rapDate">Date du Rapport : </label>
                  <span class="note"><br />(format jj/mm/aaaa)</span></td>
              <td><?php echo $date = date("Y-m-d"); ?></td>
            </tr>
          </table>
  	</fieldset>

  	<br />
   


    <label for="medicament1">Médicament 1 :</label>
    <select id="medicament1" name="medicament1" >
    <?php

    $reqSQL1 = "select medNomcommercial, medDepotLegal  from medicament";
    $result=$connexion->query($reqSQL1);
    $ligne = $result->fetch();
    while ($ligne != false) {
      $id = $ligne["medDepotLegal"];
      $lib = $ligne["medNomcommercial"];
      $selected = ($id == $medicament1) ? "selected" : "";
      echo "<option value='$id' $selected>$lib</option>";
      $ligne = $result->fetch();}
          ?>


    </select>
    <label for="medicament2">Médicament 2 :</label>
    <select id="medicament2" name="medicament2" >
    <?php

    $reqSQL1 = "select medNomcommercial, medDepotLegal  from medicament";
    $result=$connexion->query($reqSQL1);
    $ligne = $result->fetch();
    while ($ligne != false) {
      $id = $ligne["medDepotLegal"];
      $lib = $ligne["medNomcommercial"];
      $selected = ($id == $medicament2) ? "selected" : "";
      echo "<option value='$id' $selected>$lib</option>";
      $ligne = $result->fetch();}
          ?>
    </select>
    <br><br>
    

    <label for="echantillon1">echantillon 1 :</label>
    <select id="echantillon1" name="echantillon1">
    <?php

    $reqSQL1 = "select medNomcommercial, medDepotLegal  from medicament";
    $result=$connexion->query($reqSQL1);
    $ligne = $result->fetch();
    while ($ligne != false) {
      $id = $ligne["medDepotLegal"];
      $lib = $ligne["medNomcommercial"];
      $selected = ($id == $echantillon1) ? "selected" : "";
      echo "<option value='$id' $selected>$lib</option>";
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

  
    while ($ligne != false) {
      $id = $ligne["medDepotLegal"];
      $lib = $ligne["medNomcommercial"];
      $selected = ($id == $echantillon2) ? "selected" : "";
      echo "<option value='$id' $selected>$lib</option>";
      $ligne = $result->fetch();
  }
    ?>
    </select>


    

  	

    

  	<fieldset class="separateur"><legend class="legende">Infos classe</legend>
<?php
// Générer cinq boutons radio pour la notation sur 5
for ($i = 1; $i <= 5; $i++) {
    $checked = ($i == $note) ? "checked" : ""; // Vérifie si $i est égal à $note
    echo '<input type="checkbox" id="note' . $i . '" name="note' . $i . '" value="' . $i . '" ' . $checked . '>';
    echo '<label for="note' . $i . '">' . $i . '</label><br>';
}
?>



        <p class="contenu">
        <label for="rapBilan">Bilan du Rapport</label>
            <textarea id="rapBilan" name="rapBilan" rows="5" cols="33">
<?php echo $rapBilan; ?>
            </textarea>
        </p>
        
        <p class="contenu">
    <label for="rapMotif">Choisissez un motif de rapport:</label>
    <select name="rapMotif" id="rapMotif">
        <?php
        // Boucle pour générer les options du menu déroulant
        for ($i = 1; $i <= 5; $i++) {
            $selected = ($i == $rapMotif) ? "selected" : ""; // Vérifie si $i est égal à $rapMotif
            echo '<option value="' . $i . '" ' . $selected . '>';
            // Choisissez ici le texte pour chaque option
            switch ($i) {
                case 1:
                    echo 'Périodicité';
                    break;
                case 2:
                    echo 'Chute de prescription';
                    break;
                case 3:
                    echo 'Nouveautés ou actualisations';
                    break;
                case 4:
                    echo 'Demande du médecin';
                    break;
                case 5:
                    echo 'Autre';
                    break;
                default:
                    break;
            }
            echo '</option>';
        }
        ?>
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
