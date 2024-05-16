<?php
	session_save_path("../BackEnd/session");
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Accueil - GSB</title>
</head>
<body>
	<?php
	
		include('include/GSB_UpperBody.php');
	?>

	<h1 align="center">Bienvenue chez GSB</h1>

	<h2></h2>
	<p><?php
    echo "Bienvenu ".$_SESSION['nom']." votre numero de visiteur est le ".$_SESSION['num'];
?></p>
	
</body>
</html>