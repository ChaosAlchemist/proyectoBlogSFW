<?php
require_once "Conexion.php";

class Data{
    private $c;

    public function __construct(){
        $this->c = new Conexion(
            "localhost",
            "db_proyectoSoft",
            "root",
            "123456"
        );
    }

    public function getPrivilegio($user, $pass){
        $query = "select p.id
                  from permisos p, usuarios u
                  where p.id = u.permiso
                  and u.nombreUsuario = '$user'
                  and u.clave = '$pass'";

        $rs = $this->c->ejecutar($query);

        $idPrivilegio = 0;

        /*Si existe algún registro*/
        if($reg = mysql_fetch_array($rs)){
            $idPrivilegio = $reg[0];
        }

        return $idPrivilegio;
    }

    public function existeEntrada($idEntrada){
        $query="select count(*) from publicaciones where id=$idEntrada";

        $rs=this->c->ejecutar($query);
        $existe=0;

        if($reg = mysql_fetch_array($rs)){
            $existe= $reg[0];
        }

        return $existe;
    }

    public function existeUsuario($user){
        $query ="select count(*) from usuarios where nombreUsuario=$user";
        $rs=this->c->ejecutar($query);
        $existe=0;

        if($reg = mysql_fetch_array($rs)){
            $existe= $reg[0];
        }

        return $existe;
    }

    public function logIn($user, $pass){
        $query="select count(*) from usuarios where nombreUsuario='$user' and clave='$pass'";
        $acceso=0;

        if($reg = mysql_fetch_array($rs)){
            $acceso= $reg[0];
        }

        return $acceso;
    }

    public function convertirUsuarioAdmi($user,$pass){
        $query="UPDATE usuarios SET permiso = 1";
        $rs=this->c->ejecutar($query);

        $existe=0;

        if($reg = mysql_fetch_array($rs)){
            $existe= $reg[0];
        }

        return $existe;
    }
?>
