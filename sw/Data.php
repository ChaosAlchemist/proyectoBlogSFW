<?php
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

    public function  listarEntradas(){
      $query="select * publicaciones order by asc";

      $rs=this->c->ejecutar($query);

      while($reg= mysql_fetch_array($rs)){
          echo "<hr>";
          echo "<h1><a href='controlador/entrada.php?id=$reg[3]'>$reg[3]</a></h1>";
          echo "<br>";
          echo "<h2><a href='controlador/entrada.php?id=$reg[4]'>$reg[4]</a></h2>";
          echo "<hr>";


      }
    }



?>
