<?php
if(isset($_GET["id"])){
<<<<<<< HEAD
    $id = $_GET["id"];
    require_once "../sw/Data.php";
    $d = new Data();
    $d->eliminarUsuario($id);
}
=======
  $id = $_GET["id"];
  require_once "/Data.php";
  $user = $_GET["USUARIO"];
  $pass = $_GET["CLAVE"];



  $d = new Data();

  $permiso = $d->getPrivilegio($user,$pass);


  if($permiso == 1){
    if($d->eliminarUsuario($id)){
      echo "<info>";
      echo "<mensaje>'Usuario Eliminado con éxito'<mensaje/>";
      echo "<delete>true<delete/>";
      echo "<info/>";      
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
>>>>>>> e802468cf73a43b3653422bb5a2286673670ac24
