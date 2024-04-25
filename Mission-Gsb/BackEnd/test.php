<?php
    session_save_path("session");
  session_start();
?>
<?php
    echo "Bienvenu ".$_SESSION['nom']." votre numero de visiteur est le ".$_SESSION['num'];
?>