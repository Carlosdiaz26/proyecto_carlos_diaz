<?php 
	$sql = ("SELECT * FROM oficina WHERE id_oficina = '$id_oficina'");
    $result2=mysqli_query(conexion::con(), $sql);
    $c = $result2->num_rows;
?>