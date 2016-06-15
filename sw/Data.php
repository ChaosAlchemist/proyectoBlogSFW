<?php
require_once "Conexion.php";

class Data{
    private $c;

    public function __construct(){
        $this->c = new Conexion(
            "localhost",
            "grupo_a",
            "grupo_a",
            ""
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

    public function eliminarUsuario(){
      $query = "delete * from usuarios"

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

    public function registrarUsuario($nombreUsuario,$pass,$idPrivilegio){
      $q="insert into usuarios values (null,'$nombreUsuario','$pass','$idPrivilegio')";
      $this->c->ejecutar($q);
    }

    public function registrarPublicacion($fecha,$titulo,$texto,$idUsuario){
      $q="insert into publicaciones values
      (null,
      '$fecha',
      '$titulo',
      '$texto',
      '$idUsuario');";
      $this->c->ejecutar($q);
    }

    public function actualizarUsuario($id,$nombreUsuario,$clave,$permiso){
      $q="update usuarios
      set nombreUsuario='$nombreUsuario'
      ,clave='$clave'
      ,permiso='$permiso'
      where id='$id'";
      $this->c->ejecutar($q);
    }
    public function actualizarPublicacion($id,$fecha,$titulo,$texto,$idUsuario){
      $q="update publicaciones
      set fecha='$fecha',
      titulo='$titulo',
      texto='$texto',
      idUsuario='$idUsuario'
      where id='$id'";
      $this->c->ejecutar($q);
    }
    
    public function getListaPublicaciones(){
      $q="select texto from publicaciones";
      $rs=$this->c->ejecutar($q);
      while($reg = mysql_fetch_array($rs)){
        echo $reg[0];
      }
    }

    public function borrarEntrada($entrada){
        $query="delete from publicaciones where id=$entrada";
        $this->c->ejecutar($query);
    }
}
?>
