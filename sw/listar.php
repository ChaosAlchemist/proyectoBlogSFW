<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado</title>
  </head>
  <body>
    <h1>Listado</h1>
    <?php

    
    $entradas=$_GET["entradas"];
    $title=$_GET["TITULO"];
    $cuerpo=$_GET["CUERPO"];
    $cont=0;

    while ($cont<$entradas) {
      echo "<a href='entrada.php'>Entrada</a>";
    }
     ?>

  </body>
</html>
