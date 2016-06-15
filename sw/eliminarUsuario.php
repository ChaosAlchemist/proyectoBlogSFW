<?php
if(isset($_GET["id"])){
  $id = $_GET["id"];
  require_once "/Data.php";
  $user = $_GET["USUARIO"];
  $pass = $_GET["CLAVE"];



  $d = new Data();

  $permiso = $d->getPrivilegio($user,$pass);


  if($permiso == 1){
    if($existe)


  }else{
    echo "<info>";
		echo "<mensaje>'No posee los privilegios necesarios para realizar esta acción'<mensaje/>";
		echo "<delete>false<delete/>";
	  echo "<info/>";
  }

  $permiso = $d->getPrivilegio($user,$pass);
  $_SESSION["idPrivilegio"] = $idPrivilegio;
  $d->eliminarUsuario($id,$permiso);


  ?>
