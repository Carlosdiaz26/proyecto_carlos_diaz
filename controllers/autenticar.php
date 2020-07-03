
<?php session_start();
?>
<?php
include("../bd/conexion.php");
$fecha_hora = date('Y-m-d H:i:s'); 
$email = $_POST["email"];
$password = hash('sha512', $_POST["password"]);

$verificar = ("SELECT * FROM usuario WHERE email = '$email' AND password ='$password' AND estatus ='NO'");
//die($verificar);
$ress = mysqli_query(conexion::con(),$verificar);
$numero = $ress->num_rows;
if ($numero == '1') {
    header('location:../verificar.php');
}elseif ($numero < '1') {

$con = ("SELECT * FROM registro WHERE email = '$email'");
//die($con);
$res = mysqli_query(conexion::con(),$con);
$num = $res->num_rows;
foreach ($res as $key) {
    $id_registro = $key['id_registro'];
}

if ($num == '1') {
    $sql = ("INSERT INTO bitacora(id_registro,actividad,fecha_hora) VALUES ('$id_registro','Inicio sesion en la Sistema Web','$fecha_hora')");

        if (mysqli_query(conexion::con(), $sql)) {

            $sql= ("select * from usuario where email='$email' and password='$password' and tipo = '1' and estatus = 'ACTIVO'");

            $resultado=mysqli_query(conexion::con(), $sql);
            $num = $resultado->num_rows;

            if ($num>0 ){
                $row = mysqli_fetch_array($resultado);
             
                $_SESSION["aut"]="si";
                $_SESSION["tipo"]="tipo";
                
                $_SESSION["nombre"]=$row["nombre"];
                $_SESSION["email"]=$row["email"];

                    header('location:../views/admin/admin.php');
                
            }else{

            $sql= ("select * from usuario where email='$email' and password='$password' and tipo='2' and estatus = 'ACTIVO'");


            $resultado=mysqli_query(conexion::con(), $sql);
            $num = $resultado->num_rows;

            if ($num>0 ){
                $row = mysqli_fetch_array($resultado);
             
                $_SESSION["aut"]="si";
                $_SESSION["tipo"]="tipo";
                
                $_SESSION["nombre"]=$row["nombre"];
                $_SESSION["email"]=$row["email"];

                   header('location:../views/publico/home.php');
                
            }

            else{

            $sql= ("select * from usuario where email='$email' and password='$password' and tipo='3' and estatus = 'ACTIVO'");


            $resultado=mysqli_query(conexion::con(), $sql);
            $num = $resultado->num_rows;

            if ($num>0 ){
                $row = mysqli_fetch_array($resultado);
             
                $_SESSION["aut"]="si";
                $_SESSION["tipo"]="tipo";
                
                $_SESSION["nombre"]=$row["nombre"];
                $_SESSION["email"]=$row["email"];

                   header('location:../views/informatica/admin.php');
                
            }else{
               $sql= ("select * from usuario where email='$email' and password='$password' and tipo='4' and estatus = 'ACTIVO'");


            $resultado=mysqli_query(conexion::con(), $sql);
            $num = $resultado->num_rows;

            if ($num>0 ){
                $row = mysqli_fetch_array($resultado);
             
                $_SESSION["aut"]="si";
                $_SESSION["tipo"]="tipo";
                
                $_SESSION["nombre"]=$row["nombre"];
                $_SESSION["email"]=$row["email"];

                   header('location:../views/bienes/admin.php');
                
            }else{
               header('location:../index.php?msj=invalide');
              }
              }
             }
            }
            
        }
    }else{
               header('location:../login.php?msj=invalide');
              }
}

?>
