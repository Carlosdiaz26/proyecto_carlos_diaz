<?php
include("../../bd/conexion.php");
include("../../models/registro/models_registro_e_e.php");
//print_r($_POST);
$tra=new Equipos();
$tra->registro_e_e1(
	$_POST["tipo_de_equipo"],
	$_POST["descripcion"],
    $_POST["ente"],
    $_POST["nombre_responsable"],
    $_POST["telefono_responsable"],
    $_POST["cargo_responsable"],
    $_POST["falla"]
);
?>