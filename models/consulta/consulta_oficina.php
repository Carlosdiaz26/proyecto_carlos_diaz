<?php 
	$sql = ("SELECT * FROM oficina");
    $result=mysqli_query(conexion::con(), $sql);
    $c = $result->num_rows;
?>