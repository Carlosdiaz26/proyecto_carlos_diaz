<?php

class conexion {
 public static function con()
	{
		//$con=mysql_connect("localhost","root","");
		//mysql_query("SET NAMES 'utf8'");
		//mysql_select_db("informatica_unerg");
		//return $con;
		$server = "localhost";
        $user = "root";
        $pass = "";
        $bd = "informatica_alcaldia";


        $con = mysqli_connect($server, $user, $pass,$bd) 
        or die("Ha sucedido un error inexperado en la conexion de la base de datos");

        return $con;

	}
}
?>
