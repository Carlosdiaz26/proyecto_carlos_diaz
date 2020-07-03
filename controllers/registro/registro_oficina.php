<?php
	include("../../bd/conexion.php");
	include("../../models/registro/models_registro_e_e.php");
	//print_r($_POST);
	$tra=new Equipos();
	$tra->registro_oficina(
		$_POST["id_registro"],
		$_POST["oficina"]
	);

?>