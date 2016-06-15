<?php
if(!isset($_GET["user"])){
    require_once "../bd/Data.php";

    $user=$_GET["user"];
    $pass=$_GET["pass"];
    $entrada=$_GET["entrada"];

    $d=new Data();
    $idPrivilegio=$d->getPrivilegio($user,$pass):
    $existeEntrada=$d->existeEntrada($entrada);

    $existe=false;
    if($existeEntrada==1){
        $existe=true;
    }

    if($existe){
        if($idPrivilegio==1){
            echo "El usuario ya es administrador";
        }else if($idPrivilegio==2){
          $d->convertirUsuarioAdmi($user,$pass);
            echo "El usuario se ha convertido a administrador";
        }else{
            echo "Usuario invalido";
        }
    }else{
        echo "No se encuentra entrada";
    }
}

 ?>
