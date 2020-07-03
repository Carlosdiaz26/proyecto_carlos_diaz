<?php 
	$sql = ("SELECT * FROM ente WHERE id_ente ='$id_ente'");
    $result=mysqli_query(conexion::con(), $sql);
    $c = $result->num_rows;
?>