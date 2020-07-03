
<?php 
 include("../../bd/conexion.php");
 $fecha_hora = date('Y-m-d H:i:s'); 
 $id_registro = $_GET['id_registro'];
?>

<?php if ($id_registro > '0') {
	$sql = ("INSERT INTO bitacora(id_registro,actividad,fecha_hora) VALUES ('$id_registro','Cerro su sesion en el Sistema Web','$fecha_hora')");
		if (mysqli_query(conexion::con(), $sql)) {
           // *** desloguear.
					$salir = "../../index.php?msj=adios";
					if (!isset($_SESSION)){
						session_start();
					}
					$_SESSION['aut'] = NULL;
					$_SESSION['clave'] = NULL;
					unset($_SESSION['aut']);
					unset($_SESSION['clave']);


					// agregando mio: destruyo la seccion
					session_destroy();

					// agregando mio: borro la cookie agregando al logearse
					setcookie("aut", "", time()-1800);
					if ($salir != "") {header("location: $salir");
					exit;
					}
        }else{
        	 $salir = "../../index.php?msj=adios";
					if (!isset($_SESSION)){
						session_start();
					}
					$_SESSION['aut'] = NULL;
					$_SESSION['clave'] = NULL;
					unset($_SESSION['aut']);
					unset($_SESSION['clave']);


					// agregando mio: destruyo la seccion
					session_destroy();

					// agregando mio: borro la cookie agregando al logearse
					setcookie("aut", "", time()-1800);
					if ($salir != "") {header("location: $salir");
					exit;
					}
	    }
} ?>


