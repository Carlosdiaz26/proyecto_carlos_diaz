<?php 
	$sql = ("SELECT * FROM registro_e_e WHERE status ='Reparado'");
    $result=mysqli_query(conexion::con(), $sql);
    $r = $result->num_rows;
?>