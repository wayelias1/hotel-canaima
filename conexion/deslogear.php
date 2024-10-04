<?php
	session_start();
	error_reporting(0);
	session_destroy(); //Limpiar variables de sesión
	session_unset(); //Destruir la sesión
	
	header("Location: ../entrar.php");


?>