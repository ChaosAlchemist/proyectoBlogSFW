<?php
require_once"Data.php";

if(isset($_GET["btnLeerEntrada"])){
  $id=$_GET["txtId"];
  $d =new Data();
  $d->getEntrada($id);
}else {
  echo "error al registrar";
  header("location: ../index.php");

 ?>
