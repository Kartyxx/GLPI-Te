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
              <td><?php echo $_SESSION['num']; ?> </td>
            </tr>
            <tr>
              <td><label for="praNum">Numero du Practitien :</label></td>
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


    <label for="medicaments">Choisissez un médicament :</label>
    <select id="medicament" name="medicament[]" multiple style="width: 200px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px; appearance: none; background-color: #fff; background-image: url('data:image/svg+xml;utf8,<svg fill="gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="12px" height="12px"><path d="M5 10l8 8 8-8z"/></svg>'); background-repeat: no-repeat; background-position: right 10px top 50%; font-size: 14px;">
        <option value="ADIMOL">ADIMOL</option>
        <option value="AMOPIL">AMOPIL</option>
        <option value="AMOXAR">AMOXAR</option>
        <option value="AMOXI Gé">AMOXI Gé</option>
        <option value="APATOUX Vitamine C">APATOUX Vitamine C</option>
        <option value="BACTIGEL">BACTIGEL</option>
        <option value="BACTIVIL">BACTIVIL</option>
        <option value="BIVALIC">BIVALIC</option>
        <option value="CARTION">CARTION</option>
        <option value="CLAZER">CLAZER</option>
        <option value="DEPRAMIL">DEPRAMIL</option>
        <option value="DIMIRTAM">DIMIRTAM</option>
        <option value="DOLORIL">DOLORIL</option>
        <option value="EQUILAR">EQUILAR</option>
        <option value="EVEILLOR">EVEILLOR</option>
        <option value="INSECTIL">INSECTIL</option>
        <option value="JOVENIL">JOVENIL</option>
        <option value="LIDOXYTRACINE">LIDOXYTRACINE</option>
        <option value="LITHORINE">LITHORINE</option>
        <option value="NORMADOR">NORMADOR</option>
        <option value="PHYSICOR">PHYSICOR</option>
        <option value="PIRIZAN">PIRIZAN</option>
        <option value="POMADINE">POMADINE</option>
        <option value="TOUXISOL Vitamine C">TOUXISOL Vitamine C</option>
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
