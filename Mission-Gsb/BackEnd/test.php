<?php
    session_save_path("session");
  session_start();
?>
<?php
    echo "Bienvenu ".$_SESSION['nom'];
?>