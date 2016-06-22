<?php
  require_once"Data.php";

  if(isset($_GET["btnRegistrarNormal"])){
    $nombreUsuario=$_POST["txtNombreUsuario"];
    $pass1=$_POST["txtPass1"];
    $pass2=$_POST["txtPass2"];
    $idPrivilegio=$_POST["txtIdPrivilegio"];
    $d =new Data();
    $registro=true;
    $errorPass=false;
    $existe=$d->verificarUsuario($nombreUsuario);

    if ($existe == 0) {
      $registro=false;
      echo "<info>";
      echo "  <mensaje>usuario existe</mensaje>";
      echo "  <estado>$registro</estado>";
      echo "</info>";
      if ($pass1==$pass2) {
        $d->crearUsuarioNormal($nombreUsuario,$pass1,$idPrivilegio);
        $errorPass=true;
        echo "<info>";
        echo "  <mensaje>claves coinciden</mensaje>";
        echo "  <estado>$$errorPass</estado>";
        echo "</info>";

      }else {
        echo "<info>";
        echo "  <mensaje>claves no coinciden</mensaje>";
        echo "  <estado>$errorPass</estado>";
        echo "</info>";
      }
    }else {
      echo "<info>";
      echo "  <mensaje>nombre de usuario ya existe</mensaje>";
      echo "  <estado>$registro</estado>";
      echo "</info>";
    }


  }else {
    echo "error al registrar";
    header("location: ../index.php");
 ?>
