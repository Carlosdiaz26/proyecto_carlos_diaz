<?php
include("../../bd/conexion.php");
include("../../models/registro/models_registro_e_e.php");
//print_r($_POST);

$tra=new Equipos();
$tra->actualizar_e_e1(
	$_POST["id_reg_e_e"],
	$_POST["ente"],
    $_POST["solucion"],
    $_POST["status"]
);
?>