<?php 
   include("../../bd/conexion.php");
   $email = $_SESSION["email"];
   $sql = ("SELECT * FROM registro WHERE email = '$email'");
   $res=mysqli_query(conexion::con(), $sql);
    foreach ($res as $key) {
        $id = $key['id_registro'];
        $nombre_user = $key['nombre'];
    }
?>