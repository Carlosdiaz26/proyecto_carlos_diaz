<?php 
	$sql = ("SELECT * FROM registro_e_e WHERE status ='Esperando Respuesto'");
    $result=mysqli_query(conexion::con(), $sql);
    $er = $result->num_rows;
?>