<?php
	include('conexion.php');
	include('../PHPMailer/src/PHPMailer.php');
	$token2='lkaw2';

	$select="SELECT correo, pass FROM usuarios WHERE correo ='$correo' and pass = ''$pass";

	$mail = new PHPMailer();

	$mail -> isSMTP();
	$mail -> SMTPAuth = true;
	$mail -> SMTPSecure = 'tls';
	$mail -> Host = 'smtp.gmail.com';
	$mail -> Port = '587';
	$mail -> Username = 'wayelias13@gmail.com';
	$mail -> Password = '';

	$mail -> setFrom('wayelias13@gmail.com','Hotel el conde');
	$mail -> addAddress´('david.foroinner@gmail.com', 'usuario');

	$mail -> Subject = 'Hola';
	$mail -> Body = 'Recuperar contraseña:<br>Ingresa este codigo: $token2';
	$mail -> IsHTML(true);

	if ($mail->send()) {
		echo "enviado";
	}else{
		echo "Error";
	}

?>