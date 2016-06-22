<?php
if(isset($_GET["id"])){
    require_once "Data.php";
    $user = $_GET["user"];
    $pass = $_GET["pass"];
    $id = $_GET["id"];

    $d = new Data();

    $idPrivilegio = $d->getPermisoById($id);
    $existeUsuario = $d->existeUsuarioById($id);
    $existe=false;
    if($existeUsuario == 1){
        $existe=true;
    }

    if($existe){
        if($idPrivilegio == 1){
            echo "El usuario ya es administrador";
        }else if($idPrivilegio == 2){
            $d->convertirUsuarioAdmi($id);
            
            echo "El usuario se ha convertido a administrador";
        }else{
            echo "Usuario invalido";
        }
    }else{
        echo "No se encuentra usuario";
    }

}
?>
