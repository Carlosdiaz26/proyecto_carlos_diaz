<?php
include("../../bd/conexion.php");
$correo = $_POST['correo'];

$sql=("SELECT * FROM usuario INNER JOIN registro ON usuario.id_registro = registro.id_registro WHERE usuario.email = '$correo'");
//die($sql);
		$result=mysqli_query(conexion::con(), $sql);
	    $num = $result->num_rows;

		foreach ($result as $pass) {
			$tel = $pass['telefono'];
			$c = hash('sha512', $pass['cedula']);
			$tc = $pass['cedula'];
		}

        // enviar mensaje de texto al numero telefonico
		$codigo = $tc; 
		$telefono = $tel;
		// Require the bundled autoload file - the path may need to change
		// based on where you downloaded and unzipped the SDK
		require __DIR__ . '/twilio-php-master/src/Twilio/autoload.php';

		// Use the REST API Client to make requests to the Twilio REST API
		use Twilio\Rest\Client;

		// Your Account SID and Auth Token from twilio.com/console
		$sid = 'AC045fa22a8815bbeaebadd1b4094d8cba';
		$token = '2467e08220bd44fc18449be6a51061d9';
		$client = new Client($sid, $token);

		// Use the client to do fun stuff like send text messages!
		$client->messages->create(
		    // the number you'd like to send the message to
		    $telefono,
		    [
		        // A Twilio phone number you purchased at twilio.com/console
		        'from' => '+12029337576',
		        // the body of the text message you'd like to send
		        'body' => $codigo
		    ]
		);
		// fin de enviar mensaje


		if ($num > '0') {
		$sql=("UPDATE usuario SET password='$c' WHERE email='$correo'");
		//die($sql);
		if (mysqli_query(conexion::con(), $sql)) {
            
            $destino = $correo;
            $desde = "From:". "Informatica Alcaldia de Roscio";
            $asunto = "Recuperacion de Password. Tu Password temporal es:";
            echo $mensaje = $tc;
            mail($destino,$asunto,$mensaje,$desde);
            
            header("Location:../../password_reset.php?msj=enviado");
           }
		  }else{
		  	header("Location:../../password_reset.php?msj=error_enviar");
		}
	  
?>


