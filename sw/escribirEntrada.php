<?php

  require_once["Data.php"];

  if (isset["id"]){

    $fecha = $_GET['id'];
    $titulo = $_GET['txtTituto'];
    $texto = $_GET['texto'];
    $idUsuario = $_GET["idUsuario"];

    $d =new Data();
    $d->escribirPublicacion($fecha,$titulo,$texto,$idUsuario);
  }
 ?>
