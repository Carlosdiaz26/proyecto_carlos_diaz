<?php 
	$sql = ("SELECT * FROM registro_e_e WHERE status ='En Reparacion'");
    $result=mysqli_query(conexion::con(), $sql);
    $en = $result->num_rows;
?>