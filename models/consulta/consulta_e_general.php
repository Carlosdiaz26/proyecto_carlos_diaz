<?php 
	$sql = ("SELECT * FROM registro_e_e WHERE status != 'Reparado'");
    $result=mysqli_query(conexion::con(), $sql);
    $g = $result->num_rows;
?>