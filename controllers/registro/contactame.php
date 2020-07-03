<?php
include("../../bd/conexion.php");
include("../../models/registro/models_registro_e_e.php");
print_r($_POST);
$tra=new Equipos();
$tra->contactame(
	$_POST["nombre"],
	$_POST["email"],
    $_POST["asunto"],
    $_POST["mensaje"]
);
?>