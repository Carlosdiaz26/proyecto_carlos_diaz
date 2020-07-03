<?php
include("../../bd/conexion.php");
include("../../models/registro/models_registro_e_e.php");
print_r($_POST);

$tra=new Equipos();
$tra->registro_traspaso(
	$_POST["id_registro"],
	$_POST["entidad"],
    $_POST["tipo"],
    $_POST["id_inventario"],
    $_POST["ubicacion_inicial"],
    $_POST["ubicacion_final"],
    $_POST["nombre_dep_emisora"],
    $_POST["cedula_dep_emisora"],
    $_POST["nombre_dep_receptora"],
    $_POST["cedula_dep_receptora"],
    $_POST["nombre_oficina_bienes"],
    $_POST["cedula_oficina_bienes"],
    $_POST["nombre_fun_movimiento"],
    $_POST["cedula_fun_movimiento"]
);
?>


