<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado</title>
  </head>
  <body>
    <h1>Listado</h1>
    <?php
    if(!isset($_GET["user"])){
    require_once Data.php;

    $entradas=$_GET["entradas"];
    $title=$_GET["TITULO"];
    $cuerpo=$_GET["CUERPO"];

    $d= new Data();

      $d->listarEntradas();
      }
     ?>

  </body>
</html>
