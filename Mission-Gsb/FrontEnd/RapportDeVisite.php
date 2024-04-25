<?php
	session_save_path("../BackEnd/session");
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
      <td style="width: 50%; text-align: right;"><h1>Rapport Visite&nbsp;&nbsp;</h1></td>
    </tr>
  </table>

  <p><br /></p>
  <form name="inscription" action="../BackEnd/InsertionRapportVisite.php" method ="post">

  	<fieldset class="separateur"><legend class="legende">Infos personnelles</legend>
         <table>
            <tr>
              <td><label for="matricule">Matricule de visite: </label></td>
              <td><input type="text" id="matricule" name="matricule" maxlength="15" size="25" /></td>
            </tr>

            <tr>
              <td><label for="rapNum">Numero de Rapport de Visite :</label></td>
              <td><input type="text" id="rapNum" name="rapNum" maxlength="5" size="5" /></td>
            </tr><tr>
              <td><label for="praNum">Numero du Practitien :</label></td>
              <td><input type="text" id="praNum" name="praNum" maxlength="5" size="5" /></td>
            </tr>

            <tr>
              <td><label for="rapDate">Date du Rapport : </label>
                  <span class="note"><br />(format jj/mm/aaaa)</span></td>
              <td><input type="text" id="rapDate" name="rapDate" maxlength="10" size="15" /></td>
            </tr>
          </table>
  	</fieldset>

  	<br />

  	<fieldset class="separateur"><legend class="legende">Infos classe</legend>
        <p class="contenu">
        <label for="rapBilan">Bilan du Rapport</label>
            <textarea id="rapBilan" name="rapBilan" rows="5" cols="33">
                Rentrez votre rapport de Bilan
            </textarea>
        </p>
        <p class="contenu">
        <label for="rapMotif">Motif du Rapport</label>
            <textarea id="rapMotif" name="rapMotif" rows="5" cols="33">
                Rentrez le Motif de votre Rapport
            </textarea>
        </p>
  	</fieldset>

  	<p>
  		<input class="bouton" type="submit" id="envoie" name="boutonValider" value="Envoyer" />
        <input class="bouton" type="reset" id="annule" name="boutonAnnuler" value="Annuler" />
  	</p>
  </form>
</body>
</html>
