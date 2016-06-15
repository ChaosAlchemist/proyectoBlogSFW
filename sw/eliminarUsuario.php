<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    require_once "../sw/Data.php";
    $d = new Data();
    $d->eliminarUsuario($id);
}
