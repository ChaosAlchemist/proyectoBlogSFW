<?php
// echo "<meta charset='utf-8'>";
if(isset($_GET["id"])){
     require_once "Data.php";
     $id = $_GET["id"];
     $user = $_GET["user"];
     $pass = $_GET["pass"];

     $d= new Data();

     $permiso = $d->getPrivilegio($user,$pass);
     $existe = $d->verificarUsuario($id);
     $_SESSION["permiso"] = $permiso;

     $men = null;
     $del = null;

     if($permiso == 1){
          if($existe == 1){
               if($d->eliminarUsuario($id)){
                    $men = "Usuario Eliminado con éxito";
                    $del = "true";
               }else{
                    $men = "Error al ejecutar la consulta";
                    $del = "false";
               }
          }else{
               $men = "El usuario especificado no existe";
               $del = "false";

          }



     }else{
          $men = "No posee los privilegios necesarios para realizar esta acción";
          $del = "false";
     }

     echo '<?xml version="1.0" encoding="UTF-8"?>';
     echo "<info>";
     echo "<mensaje>$men</mensaje>";
     echo "<delete>$del</delete>";
     echo "</info>";
}else{
    echo "no ha indicado id";
}








?>
