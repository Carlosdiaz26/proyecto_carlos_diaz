<?php 
	$sql = ("SELECT * FROM registro_e_e WHERE status ='En Cola'");
    $result=mysqli_query(conexion::con(), $sql);
    $c = $result->num_rows;
?>