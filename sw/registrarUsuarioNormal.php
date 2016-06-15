<?php
  require_once"../bd/Data2.php";

  if(isset($_POST["btnRegistrarNormal"])){
    $nombreUsuario=$_POST["txtNombreUsuario"];
    $pass=$_POST["txtPass"];
    $idPrivilegio=$_POST["txtIdPrivilegio"];
    $d =new Data();
    $d->crearUsuarioNormal($nombreUsuario,$pass,$idPrivilegio);
  }else {
    echo "error al registrar";
    header("location: ../index.php");
 ?>
