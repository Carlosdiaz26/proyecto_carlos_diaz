<?php 
	$sql = ("SELECT * FROM oficina WHERE id_oficina ='$id_oficina'");
    $result=mysqli_query(conexion::con(), $sql);
    $c = $result->num_rows;
?>