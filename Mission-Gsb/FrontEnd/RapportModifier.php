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
 <?php 
 $matricule=$_SESSION['num'];
 $reqSQL = "SELECT 	rapNum, visMatricule, praNum, rapDate, rapBilan, idMotif
 From rapportvisite 
 Where visMatricule ='$matricule'";

 $result = $connexion->query($reqSQL);
 $ligne = $result->fetch();
 $rapid=$ligne[5];

 $reqSQL1 = "SELECT Motiflibelle 
 From motifrapport m, rapportvisite r
 where m.Motifid = r.idMotif
 AND m.Motifid ='$rapid'";
 $result1 = $connexion->query($reqSQL1);
 $ligne1 = $result1->fetch();


 echo "<table border='1'>";
 echo "<tr><th>Numero du rapport</th><th>Numéro de matricule</th><th>Numéro du practitien</th><th>Date du rapport</th><th>billan du rapport</th><th>Motif du rapport</th></tr>";


 while ($ligne!=false){

  $rapNum =$ligne[0];  
	$matricule=$ligne[1];  
  $praNum=$ligne[2];
  $rapDate=$ligne[3];
  $rapBilan=$ligne[4];
  $rapMotif=$ligne1[0];
  


  echo "<tr>";
  echo "<td>".$rapNum."</td>";
  echo "<td>".$matricule."</td>";
  echo "<td>".$praNum."</td>";
  echo "<td>".$rapDate."</td>";
  echo "<td>".$rapBilan."</td>";
  echo "<td>".$rapMotif."</td>";
  echo "<td>"."<a href='RapportModifier1.php?rapNum=".$rapNum."'>"."Modifier</a>"."</tq>";
  echo "</tr>";

  $ligne = $result->fetch();

 }
 ?>
    
  </form>
</body>
</html>
