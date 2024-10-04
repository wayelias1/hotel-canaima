	<header>
		<nav>
			<a href="index.php"><img src="../../imag/minilog.png" id="minilog"></a>
				<input type="checkbox" id="menu-bar">
				<label id="MenuD" for="menu-bar">&equiv;</label>
			<ul id="Menu">
				<li><a href="index.php" class="opcion"> Inicio</a></li>
				<li><a href="reserva.php" class="opcion">Reserva</a></li>
				<li><a href="galeria.php" class="opcion">Galeria</a></li>
				<li><a href="informacion.php" class="opcion">Información</a></li>
				<li><a href="contactos.php" class="opcion">Contactos</a></li>
			</ul>
			<label id="" for="bar">
			<div id="cajap">
				<input type="checkbox" id="bar">
				<img src="../../imag/perfil.jpg" id="perfil"><a id="nperfil" style="text-transform: capitalize;">
					<?php 
						// include('../../conexion/validar.php');
						// echo $varsesion;
					?>
					</a>
					<ul id="useropcion">
						<li><a href="perfil.php" class="opcion">Mi perfil</a></li>
						<li><a href="../../conexion/deslogear.php" class="opcion">Salir</a></li>
					</ul>
			</div>
			</label>	
		</nav>
	</header>
