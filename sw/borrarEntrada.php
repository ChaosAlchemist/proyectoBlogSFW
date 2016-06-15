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
            if($idPrivilegio==1){ //admin
                $d->borrarEntrada($entrada);
                echo "<info>";
                echo "<mensaje>'Borrado exitoso'<mensaje/>";
                echo "<estado>true<estado/>";
                echo "<info>";
            }else if($idPrivilegio==2){ //estandar
                echo "Usuario no tiene privilegios administrador";
            }else{
                echo "<info>";
                echo "<mensaje>'Usuario invalido'<mensaje/>";
                echo "<estado>false<estado/>";
                echo "<info>";
            }
        }else{
            echo "<info>";
            echo "<mensaje>'Entrada no se encuentra'<mensaje/>";
            echo "<estado>false<estado/>";
            echo "<info>";
        }
    }//volver al index.
?>
