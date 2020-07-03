<?php 
    $fecha = date('Y/m/d');
	$sql = ("SELECT * FROM registro_e_e WHERE fecha_registro ='$fecha'");
    $result=mysqli_query(conexion::con(), $sql);
    $cursos = $result->num_rows;
?>