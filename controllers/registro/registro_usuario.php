<?php
include("../../bd/conexion.php");
include("../../models/registro/models_registro_e_e.php");
//print_r($_POST);
$tra=new Equipos();
$tra->registro_usuario(
	$_POST["nombre"],
    $_POST["cedula"],
    $_POST["email"],
    hash('sha512', $_POST["password"]),
    $_POST["ente"],
    $_POST["tipo"]
);

?>
