<?php
include("../../bd/conexion.php");
include("../../models/registro/models_registro_e_e.php");
//print_r($_POST);
$tra=new Equipos();
$tra->actualizar_inventario1(
	$_POST["id_inventario"],
    $_POST["codigo"],
    $_POST["equipo"],
    $_POST["categoria"],
    $_POST["id_oficina"],
    $_POST["marca"],
    $_POST["modelo"],
    $_POST["descripcion"]
);


?>