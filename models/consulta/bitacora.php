<?php 
	$bitacora = ("SELECT * FROM bitacora INNER JOIN registro 
	               ON bitacora.id_registro = registro.id_registro ORDER BY id_bitacora DESC");
	//die($bitacora);
	$result_bitacora=mysqli_query(conexion::con(), $bitacora);
?>