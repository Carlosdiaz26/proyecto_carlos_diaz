<?php

include("../../bd/conexion.php");
include("../../models/cambiar_password/cambiar_password.php");
  
  $tra=new Usuario();
  $tra->cambiar_password(
	$_POST["email"],
	hash('sha512', $_POST["password_actual"]),
	hash('sha512', $_POST["nuevo_password"]),
	hash('sha512', $_POST["repita_password"]));
?>
