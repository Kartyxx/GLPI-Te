<?php
	session_save_path("session");
  session_start();
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
  <table   style="width: 100%">
    <tr>
      <td style="width: 50%; text-align: right;"><h1>Recherche de Medicament&nbsp;&nbsp;</h1></td>
    </tr>
  </table>

  <p><br /></p>
  <form name="inscription" action="selectMedicament.php" method ="post">

  	<fieldset class="separateur"><legend class="legende">
         <table>
            <tr>
              <td><label for="matricule">Medicament a rechercher:</label></td>
              <td><input type="text" id="medoc" name="medoc" maxlength="15" size="25" /></td>
            </tr>
            
          </table></legend>
  	</fieldset>
      <p>
  		<input class="bouton" type="submit" id="envoie" name="boutonValider" value="Valider" />
        <input class="bouton" type="reset" id="annule" name="boutonAnnuler" value="Annuler" />
  	</p>
</form>
<?php
echo $_SESSION['nom']
?>
</body>
</html>