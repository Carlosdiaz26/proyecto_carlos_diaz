<?php 
   $email = $_SESSION["email"];
   $sql1 = ("SELECT * FROM usuario WHERE email = '$email'");
   //die($sql1);	
   $res1=mysqli_query(conexion::con(), $sql1);
    foreach ($res1 as $key1) {
        $ente = utf8_decode($key1['ente']);
    }
?>