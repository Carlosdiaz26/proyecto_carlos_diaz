<?php 
	$sql = ("SELECT * FROM inventario WHERE id_oficina = '$id_oficina'");
    $result1=mysqli_query(conexion::con(), $sql);
    $c = $result->num_rows;
?>