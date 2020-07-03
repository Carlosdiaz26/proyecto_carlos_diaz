<?php 
	$sql = ("SELECT * FROM registro_e_e WHERE ente = '$ente' ORDER BY id_reg_e_e DESC");
    $result=mysqli_query(conexion::con(), $sql);
    $cursos = $result->num_rows;
?>