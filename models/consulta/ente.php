<?php 
	$sql = ("SELECT * FROM registro_e_e WHERE ente = '$ent' AND status != 'Reparado'");
	//die($sql);
    $result=mysqli_query(conexion::con(), $sql);
    $num = $result->num_rows;
?>