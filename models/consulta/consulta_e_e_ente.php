<?php 
	$sql = ("SELECT * FROM registro_e_e WHERE id_reg_e_e = '$id'");
    $result=mysqli_query(conexion::con(), $sql);
    $g = $result->num_rows;
?>