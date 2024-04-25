<html>
<meta charset="utf-8">
<head>
	<title>Login - GSB</title>
</head>

<body>
<?php
  include 'include/GSB_UpperBody.php';
?> 
<div id="connexion">
<h1>Connexion</h1>

<form method="post" name="inscription" action="../BackEnd/identification.php" onSubmit="return verifChamps()">
        <p align="center">
            <input type="text" name="denomination" id="denomination" maxlength="25" placeholder="Identifiant"><br/><br/>

            <input type="password" name="mot" id="mot" maxlength="8" placeholder="Mot de passe"><br/><br/>

        </p>

  <p align="center"> 
    <input type="submit" name="envoi" value="Connexion"><br/><br/>

    Vous rencontrez un problème ?
    Cliquez <a href="#">ici</a>.
  </p>
  <br />
</form>
</div>

<?php
  include 'include/GSB_LowerBody.php';
?>

</body>
</html>
