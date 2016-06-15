<?php
    if(!isset($_GET["user"])){
        require_once "../bd/Data.php";

        $user=$_GET["user"];
        $pass=$_GET["pass"];

        $d=new Data();

        $existeUsuario=false;
        if($d->existeUsusario($user)==1){
            $existeUsusario=true;
        }

        $ingreso=false;
        if($d->logIn($user,$pass)==1){
            $ingreso=true;
        }

        if($existeUsuario){
            if($ingreso){
                echo "Usuario ingresado";
            }else{
                echo "Clave usuario incorrecta"
            }
        }else{
            echo "No existe usuario";
        }
    }
?>
