<?php
require_once"../bd/Data2.php";

if(isset($_POST["btnLeerEntrada"])){
  $id=$_POST["txtId"];
  $d =new Data();
  $d->getEntrada($id);
}else {
  echo "error al registrar";
  header("location: ../index.php");

 ?>
