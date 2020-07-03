<?php 
 class Equipos
{
		
    public function registro_e_e($tipo_de_equipo,$descripcion,$ente,$nombre_responsable,$telefono_responsable,$cargo_responsable,$falla)
	{
		$fecha = date('Y/m/d');
        
		$sql = ("INSERT INTO registro_e_e(tipo_de_equipo,descripcion,ente,nombre_responsable,telefono_responsable,cargo_responsable,falla,fecha_registro,status) VALUES ('$tipo_de_equipo','$descripcion','$ente','$nombre_responsable','$telefono_responsable','$cargo_responsable','$falla','$fecha','En Cola')");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			 header("Location:../../views/admin/registrar_e_e.php?msj=bien");
		  }else{
		  	 header("Location:../../views/admin/registrar_e_e.php?msj=error");
		  }       
        
	}

	public function registro_e_e1($tipo_de_equipo,$descripcion,$ente,$nombre_responsable,$telefono_responsable,$cargo_responsable,$falla)
	{
		$fecha = date('Y/m/d');
        
		$sql = ("INSERT INTO registro_e_e(tipo_de_equipo,descripcion,ente,nombre_responsable,telefono_responsable,cargo_responsable,falla,fecha_registro,status) VALUES ('$tipo_de_equipo','$descripcion','$ente','$nombre_responsable','$telefono_responsable','$cargo_responsable','$falla','$fecha','En Cola')");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			 header("Location:../../views/informatica/registrar_e_e.php?msj=bien");
		  }else{
		  	 header("Location:../../views/informatica/registrar_e_e.php?msj=error");
		  }       
        
	}

	public function registro_oficina($id_registro,$oficina)
	{
		$fecha = date('Y/m/d');
        
		$sql = ("INSERT INTO oficina(id_registro,oficina,fecha_registro) VALUES ('$id_registro','$oficina','$fecha')");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			 header("Location:../../views/admin/agregar_oficina.php?msj=exito");
		  }else{
		  	 header("Location:../../views/admin/agregar_oficina.php?msj=error");
		  }       
        
	}

	public function registro_ente($id_registro,$ente)
	{
		$fecha = date('Y/m/d');
        
		$sql = ("INSERT INTO ente(id_registro,ente,fecha_registro) VALUES ('$id_registro','$ente','$fecha')");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			 header("Location:../../views/admin/agregar_ente.php?msj=exito");
		  }else{
		  	 header("Location:../../views/admin/agregar_ente.php?msj=error");
		  }       
        
	}

	public function actualizar_ente($id_ente,$ente)
	{
		$fecha = date('Y/m/d');
        
		$sql = ("UPDATE ente SET ente='$ente' WHERE id_ente='$id_ente'");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			 header("Location:../../views/admin/agregar_ente.php?msj=update");
		  }else{
		  	 header("Location:../../views/admin/agregar_ente.php?msj=error1");
		  }       
        
	}

	public function actualizar_oficina($id_oficina,$oficina)
	{
		$fecha = date('Y/m/d');
        
		$sql = ("UPDATE oficina SET oficina='$oficina' WHERE id_oficina='$id_oficina'");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			 header("Location:../../views/admin/agregar_oficina.php?msj=update");
		  }else{
		  	 header("Location:../../views/admin/agregar_oficina.php?msj=error1");
		  }       
        
	}

	public function registro_inventario($id_registro,$codigo,$equipo,$categoria,$id_oficina,$marca,$modelo,$descripcion)
	{
		$fecha = date('Y/m/d');
        
		$sql = ("INSERT INTO inventario(id_registro,codigo,equipo,categoria,id_oficina,marca,modelo,descripcion,fecha_registro) VALUES ('$id_registro','$codigo','$equipo','$categoria','$id_oficina','$marca','$modelo','$descripcion','$fecha')");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			 header("Location:../../views/admin/registro_inventario.php?msj=exito");
		  }else{
		  	 header("Location:../../views/admin/registro_inventario.php?msj=error");
		  }       
        
	}

	public function registro_inventario1($id_registro,$codigo,$equipo,$categoria,$id_oficina,$marca,$modelo,$descripcion)
	{
		$fecha = date('Y/m/d');
        
		$sql = ("INSERT INTO inventario(id_registro,codigo,equipo,categoria,id_oficina,marca,modelo,descripcion,fecha_registro) VALUES ('$id_registro','$codigo','$equipo','$categoria','$id_oficina','$marca','$modelo','$descripcion','$fecha')");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			 header("Location:../../views/bienes/registro_inventario.php?msj=exito");
		  }else{
		  	 header("Location:../../views/bienes/registro_inventario.php?msj=error");
		  }       
        
	}


	public function actualizar_inventario($id_inventario,$codigo,$equipo,$categoria,$id_oficina,$marca,$modelo,$descripcion)
	{
		$fecha = date('Y/m/d');
        
		$sql = ("UPDATE inventario SET codigo ='$codigo',equipo='$equipo',categoria='$categoria',id_oficina='$id_oficina',marca='$marca',modelo='$modelo',descripcion='$descripcion' WHERE id_inventario = '$id_inventario'");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			 header("Location:../../views/admin/inventario.php?msj=update");
		  }else{
		  	 header("Location:../../views/admin/inventario.php?msj=error1");
		  }       
        
	}

	public function actualizar_inventario1($id_inventario,$codigo,$equipo,$categoria,$id_oficina,$marca,$modelo,$descripcion)
	{
		$fecha = date('Y/m/d');
        
		$sql = ("UPDATE inventario SET codigo ='$codigo',equipo='$equipo',categoria='$categoria',id_oficina='$id_oficina',marca='$marca',modelo='$modelo',descripcion='$descripcion' WHERE id_inventario = '$id_inventario'");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			 header("Location:../../views/bienes/inventario.php?msj=update");
		  }else{
		  	 header("Location:../../views/bienes/inventario.php?msj=error1");
		  }       
        
	}




	public function actualizar_e_e($id_reg_e_e,$ente,$solucion,$status)
	{
		$fecha_modificado = date('Y/m/d');
		$sql=("UPDATE registro_e_e SET solucion='$solucion', status='$status',fecha_modificado='$fecha_modificado' WHERE id_reg_e_e='$id_reg_e_e'");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
             header("Location:../../views/admin/salida_e.php?id_reg_e_e=$id_reg_e_e&ente=$ente&msj=update");
        }else{
        	 header("Location:../../views/admin/salida_e.php?id_reg_e_e=$id_reg_e_e&ente=$ente&msj=error1");
	    }		
	
    }

    public function actualizar_e_e1($id_reg_e_e,$ente,$solucion,$status)
	{
		$fecha_modificado = date('Y/m/d');
		$sql=("UPDATE registro_e_e SET solucion='$solucion', status='$status',fecha_modificado='$fecha_modificado' WHERE id_reg_e_e='$id_reg_e_e'");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
             header("Location:../../views/informatica/salida_e.php?id_reg_e_e=$id_reg_e_e&ente=$ente&msj=update");
        }else{
        	 header("Location:../../views/informatica/salida_e.php?id_reg_e_e=$id_reg_e_e&ente=$ente&msj=error1");
	    }		
	
    }


    public function actualizar_perfil($id_registro,$nombre)
	{
		$fecha_modificado = date('Y/m/d');
		$sql=("UPDATE registro SET nombre='$nombre' WHERE id_registro='$id_registro'");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
             header("Location:../../views/admin/perfil.php?msj=update");
        }else{
        	 header("Location:../../views/admin/perfil.php?msj=error1");
	    }		
	
    }

    public function actualizar_perfil1($id_registro,$nombre,$cedula)
	{
		$fecha_modificado = date('Y/m/d');
		$sql=("UPDATE registro SET nombre='$nombre',cedula='$cedula' WHERE id_registro='$id_registro'");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
             header("Location:../../views/publico/perfil.php?msj=update");
        }else{
        	 header("Location:../../views/publico/perfil.php?msj=error1");
	    }		
	
    }

    public function actualizar_perfil2($id_registro,$nombre,$cedula)
	{
		$fecha_modificado = date('Y/m/d');
		$sql=("UPDATE registro SET nombre='$nombre',cedula='$cedula' WHERE id_registro='$id_registro'");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
             header("Location:../../views/bienes/perfil.php?msj=update");
        }else{
        	 header("Location:../../views/bienes/perfil.php?msj=error1");
	    }		
	
    }

    public function actualizar_perfil3($id_registro,$nombre,$cedula)
	{
		$fecha_modificado = date('Y/m/d');
		$sql=("UPDATE registro SET nombre='$nombre',cedula='$cedula' WHERE id_registro='$id_registro'");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
             header("Location:../../views/informatica/perfil.php?msj=update");
        }else{
        	 header("Location:../../views/informatica/perfil.php?msj=error1");
	    }		
	
    }


    public function registro_usuario($nombre,$cedula,$email,$password,$ente,$tipo)
	{
		$fecha = date('Y/m/d');
        
		$sql = ("INSERT INTO registro(nombre,email,fecha) VALUES ('$nombre','$email','$fecha')");

		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			 $consulta = ("SELECT  * FROM registro ORDER BY id_registro DESC LIMIT 1");
		      $r=mysqli_query(conexion::con(), $consulta);
		      foreach ($r as $key) {
		      	$ultimo_id = $key['id_registro'];
		      	
		  }
        }
        
		$sql1 = ("INSERT INTO usuario(id_registro,email,password,ente,tipo,estatus,codigo,fecha_registro) VALUES ('$ultimo_id','$email','$password','$ente','$tipo','ACTIVO','no por ahora','$fecha')");
		if (mysqli_query(conexion::con(), $sql1)) {

            header("Location:../../views/admin/crear_usuario.php?msj=exito");

      }else{
        	header('location:../../views/admin/crear_usuario.php?msj=error');
	    }
	
    }	

    public function actualizar_usuario($id_registro,$nombre,$email,$ente,$tipo,$estatus)
	{
		$fecha = date('Y/m/d');
        $sql = ("UPDATE registro SET nombre = '$nombre', email = '$email' WHERE id_registro = '$id_registro'");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			$sql1 = ("UPDATE usuario SET email='$email',ente='$ente',tipo='$tipo',estatus='$estatus' WHERE id_registro='$id_registro'");
		       if (mysqli_query(conexion::con(), $sql1)) {

                    header("Location:../../views/admin/crear_usuario.php?msj=update");

		      }else{
		        	header('location:../../views/admin/crear_usuario.php?msj=error1');
			    }
        }
    }


    public function contactame($nombre,$email,$asunto,$mensaje)
	{
		$fecha = date('Y/m/d');
        
		$sql = ("INSERT INTO contactame(nombre,email,asunto,mensaje,fecha,status) VALUES ('$nombre','$email','$asunto','$mensaje','$fecha','recibido')");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
			 header("Location:../../contacto.php?msj=msj");
		  }else{
		  	 header("Location:../../contacto.php?msj=msj_error");
		  } 	
	
    }


     public function registro_traspaso($id_registro,$entidad,$tipo,$id_inventario,$ubicacion_inicial,$ubicacion_final,$nombre_dep_emisora,$cedula_dep_emisora,$nombre_dep_receptora,$cedula_dep_receptora,$nombre_oficina_bienes,$cedula_oficina_bienes,$nombre_fun_movimiento,$cedula_fun_movimiento)

	{
		$fecha = date('Y/m/d');

		$consulta = ("SELECT  * FROM traspaso ORDER BY id_traspaso DESC LIMIT 1");
		$r=mysqli_query(conexion::con(), $consulta);
		foreach ($r as $key) {
			$n = $key['numero']+1;
		}
        
		$sql = ("INSERT INTO traspaso(id_registro,id_inventario,entidad,tipo,numero,ubicacion_inicial,ubicacion_final,nombre_dep_emisora,cedula_dep_emisora,nombre_dep_receptora,cedula_dep_receptora,nombre_oficina_bienes,cedula_oficina_bienes,nombre_fun_movimiento,cedula_fun_movimiento,fecha_traspaso) 
			VALUES ('$id_registro','$id_inventario','$entidad','$tipo','$n','$ubicacion_inicial','$ubicacion_final','$nombre_dep_emisora','$cedula_dep_emisora','$nombre_dep_receptora','$cedula_dep_receptora','$nombre_oficina_bienes','$cedula_oficina_bienes','$nombre_fun_movimiento','$cedula_fun_movimiento','$fecha')");


		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
        $sql1=("UPDATE inventario SET id_oficina='$ubicacion_final' WHERE id_inventario='$id_inventario'");
        if (mysqli_query(conexion::con(), $sql1)) {
        //die($sql);

			 header("Location:../../views/admin/traspaso.php?msj=bien");
		  }else{
		  	 header("Location:../../views/admin/traspaso.php?msj=error");
		  }       
        }
	}

	public function registro_traspaso1($id_registro,$entidad,$tipo,$id_inventario,$ubicacion_inicial,$ubicacion_final,$nombre_dep_emisora,$cedula_dep_emisora,$nombre_dep_receptora,$cedula_dep_receptora,$nombre_oficina_bienes,$cedula_oficina_bienes,$nombre_fun_movimiento,$cedula_fun_movimiento)

	{
		$fecha = date('Y/m/d');

		$consulta = ("SELECT  * FROM traspaso ORDER BY id_traspaso DESC LIMIT 1");
		$r=mysqli_query(conexion::con(), $consulta);
		foreach ($r as $key) {
			$n = $key['numero']+1;
		}
        
		$sql = ("INSERT INTO traspaso(id_registro,id_inventario,entidad,tipo,numero,ubicacion_inicial,ubicacion_final,nombre_dep_emisora,cedula_dep_emisora,nombre_dep_receptora,cedula_dep_receptora,nombre_oficina_bienes,cedula_oficina_bienes,nombre_fun_movimiento,cedula_fun_movimiento,fecha_traspaso) 
			VALUES ('$id_registro','$id_inventario','$entidad','$tipo','$n','$ubicacion_inicial','$ubicacion_final','$nombre_dep_emisora','$cedula_dep_emisora','$nombre_dep_receptora','$cedula_dep_receptora','$nombre_oficina_bienes','$cedula_oficina_bienes','$nombre_fun_movimiento','$cedula_fun_movimiento','$fecha')");


		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
        $sql1=("UPDATE inventario SET id_oficina='$ubicacion_final' WHERE id_inventario='$id_inventario'");
        if (mysqli_query(conexion::con(), $sql1)) {
        //die($sql);

			 header("Location:../../views/bienes/traspaso.php?msj=bien");
		  }else{
		  	 header("Location:../../views/bienes/traspaso.php?msj=error");
		  }       
        }
	}
}
?>