<?php 
	$sql = ("SELECT * FROM registro_e_e WHERE ente='$ente' AND status <> 'Reparado'");
	//die($sql);
    $result=mysqli_query(conexion::con(), $sql);
    $r = $result->num_rows;
?>