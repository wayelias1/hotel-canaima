<!DOCTYPE html>
<html lang="es">
<?php 
	include('vista/libreria2.php');
  ?>
<body>
	<?php
		include_once('vista/header.php');
	 ?>
		<div class="content">
			<form action="conexion/validar.php" method="POST">
			<p id="register">Entrada</p>
			<p><input type="text" name="user" placeholder="Ingresa tu usuario" required></p>
			<p><input type="password" name="pass" placeholder="Ingresa tu contraseña" required></p>
			<a name="recupera" href="conexion/recuperar.php" id="link">¿Haz olvidado tu contraseña?</a>
			<p><button type="submit" id="boton"><b>Entrar</b></button></p>
			</form>
			<div id="todolist">
				<?php
					include('conexion/conexion.php');
					
				?>
			</div>
		</div>	
	<?php 
		include('vista/footer.php'); ?>	
</body>
</html>