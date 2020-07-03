<?php
	include("../../bd/conexion.php");
	include("../../models/registro/models_registro_e_e.php");
	//print_r($_POST);
	$tra=new Equipos();
	$tra->actualizar_oficina(
		$_POST["id_oficina"],
		$_POST["oficina"]
	);

?>