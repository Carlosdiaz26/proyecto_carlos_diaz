<?php 
	$sql = ("SELECT * FROM ente");
    $result=mysqli_query(conexion::con(), $sql);
    $c = $result->num_rows;
?>