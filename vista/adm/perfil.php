<?php
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];

	if(!isset($varsesion))
        {
           
            echo 'Usted no tiene autorización';
			die();
        }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Hotel el conde</title>
	<link rel="stylesheet" type="text/JavaScript" href="javascript/carousel.js">
	<link rel="stylesheet" type="text/css" href="../../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../../css/slider.css">
	<script type="text/javascript" src="../../javascript/query.js"></script>
</head>
<body>
	<?php 
		include('header.php');
	 ?>	
	<h2 style="color: white;">Bienvenido Administrador</h2>
	<p id="text">Imagen de perfil:</p>
	<div id="modii"><img  id="imagen" src="../../imag/perfil.jpg"></div>
	
	<footer>
		<span>&copy, Todos los derechos reservados - 2019</span>
	</footer>	
</body>
</html>