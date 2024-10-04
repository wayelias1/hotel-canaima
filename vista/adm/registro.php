<!DOCTYPE html>
<html lang="es">
<?php 
	include('../libreria.php');
  ?>
<body>
		<header>
		<nav>
			<a href="index.php"><img src="../../imag/minilog.png" id="minilog"></a>
				<input type="checkbox" id="menu-bar">
				<label id="MenuD" for="menu-bar">&equiv;</label>
			<ul id="Menu">
				<li><a href="index.php" class="opcion"> Inicio</a></li>
				<li><a href="reserva.php" class="opcion">Reserva</a></li>
				<li><a href="entrar.php" class="opcion">Entrar</a></li>
				<li><a href="registro.php" class="opcion">Registrarse</a></li>
				<li><a href="informacion.php" class="opcion">Información</a></li>
				<li><a href="contactos.php" class="opcion">Contactos</a></li>
			</ul>
		</nav>
	</header>
		<div class="content">
			<form action="registro.php" method="POST">
			<p id="register">Registrarse</p>
			<p><input type="text" name="user" placeholder="Ingrese un nombre de usuario" required></p>
			<p><input type="email" name="correo" placeholder="Ingresa un correo" required></p>
			<p><input type="password" name="pass" placeholder="Ingresa una contraseña" required></p>
			<p><input type="password" name="passv" placeholder="Valida la contraseña" required></p>
			<p><input type="text" name="token" placeholder="ingrese el token" required></p>
			<button type="submit" id="boton">Registrarte</button>
			</form>
			<div id="todolist" style="color: white;">
				<?php
					include('../../conexion/conexion.php');
					include('../../conexion/insertar2.php');
				?>
			</div>
		</div>
	<?php 
		include('../footer.php'); ?>	
</body>
</html>