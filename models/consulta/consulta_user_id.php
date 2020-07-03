<?php 
	$sql = ("SELECT * FROM usuario INNER JOIN registro ON usuario.id_registro = registro.id_registro WHERE usuario.id_usuario = '$id_usuario'");
    $result=mysqli_query(conexion::con(), $sql);
    $g = $result->num_rows;
?>