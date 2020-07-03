<?php 
 class Usuario
{
	
	public function cambiar_password($email, $password_actual, $nuevo_password, $repita_password)
	{
		
		$password_nuevo = hash('sha512',$_POST['nuevo_password']);
		$pass = hash('sha512',$_POST['password_actual']);
		$consulta = ("SELECT  * FROM usuario WHERE email = '$email'");
		//die($consulta);
		$res=mysqli_query(conexion::con(), $consulta);
        foreach ($res as $key) {
        	$password_a = $key['password'];
        }
        
		if ($password_a == $pass) {
			$sql=("UPDATE usuario SET password='$password_nuevo' WHERE email='$email'");
		if (mysqli_query(conexion::con(), $sql)) {
            header("Location:../../views/admin/cambiar_password.php?msj=update_pass");
           }
		}else{
			header("location:../../views/admin/cambiar_password.php?msj=error1");
		}	
	  }


	public function cambiar_password1($email, $password_actual, $nuevo_password, $repita_password)
	{
		
		$password_nuevo = hash('sha512',$_POST['nuevo_password']);
		$pass = hash('sha512',$_POST['password_actual']);
		$consulta = ("SELECT  * FROM usuario WHERE email = '$email'");
		//die($consulta);
		$res=mysqli_query(conexion::con(), $consulta);
        foreach ($res as $key) {
        	$password_a = $key['password'];
        }
        
		if ($password_a == $pass) {
			$sql=("UPDATE usuario SET password='$password_nuevo' WHERE email='$email'");
			//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
            header("Location:../../views/publico/cambiar_password.php?msj=update_pass");
           }
		}else{
			header("location:../../views/publico/cambiar_password.php?msj=error1");
		}	
	  }

	  public function cambiar_password2($email, $password_actual, $nuevo_password, $repita_password)
	{
		
		$password_nuevo = hash('sha512',$_POST['nuevo_password']);
		$pass = hash('sha512',$_POST['password_actual']);
		$consulta = ("SELECT  * FROM usuario WHERE email = '$email'");
		//die($consulta);
		$res=mysqli_query(conexion::con(), $consulta);
        foreach ($res as $key) {
        	$password_a = $key['password'];
        }
        
		if ($password_a == $pass) {
			$sql=("UPDATE usuario SET password='$password_nuevo' WHERE email='$email'");
			//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
            header("Location:../../views/bienes/cambiar_password.php?msj=update_pass");
           }
		}else{
			header("location:../../views/bienes/cambiar_password.php?msj=error1");
		}	
	  }

	    public function cambiar_password3($email, $password_actual, $nuevo_password, $repita_password)
	{
		
		$password_nuevo = hash('sha512',$_POST['nuevo_password']);
		$pass = hash('sha512',$_POST['password_actual']);
		$consulta = ("SELECT  * FROM usuario WHERE email = '$email'");
		//die($consulta);
		$res=mysqli_query(conexion::con(), $consulta);
        foreach ($res as $key) {
        	$password_a = $key['password'];
        }
        
		if ($password_a == $pass) {
			$sql=("UPDATE usuario SET password='$password_nuevo' WHERE email='$email'");
			//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
            header("Location:../../views/informatica/cambiar_password.php?msj=update_pass");
           }
		}else{
			header("location:../../views/informatica/cambiar_password.php?msj=error1");
		}	
	  }

} 
?>