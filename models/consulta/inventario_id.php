<?php 
	$sql = ("SELECT * FROM inventario INNER JOIN oficina ON inventario.id_oficina = oficina.id_oficina WHERE inventario.id_inventario = '$id_inventario'");
    $result=mysqli_query(conexion::con(), $sql);
    $c = $result->num_rows;
?>