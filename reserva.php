<!DOCTYPE html>
<html lang="es">
<?php 
	include('vista/libreria2.php');
  ?>
<body>
	<?php
		include_once('vista/header.php');
	 ?>
	<div class="content"><p>Reservas</p></div>
	<div id="casilla">
		<section id="Sect">
			<a href="#modal" id="habit">Individual</a>
			<img src="imag/reservan.jpg" name="normal" id="reserva">
		</section>
		<section id="Sect">
			<a href="#modal" id="habit">Doble</a>
			<img src="imag/reservad.jpg" name="doble" id="reserva">
		</section>
		<section id="Sect">
			<a href="#modal" id="habit">Matrimonial</a>
			<img src="imag/reservam.jpg" name="matrimonial" id="reserva">
		</section>
		<section id="Sect">
			<a href="#modal" id="habit">Suite</a>
			<img src="imag/reservav.jpg" name="vip" id="reserva">
		</section>
	</div>

		<div id="modal"><h1 id="title-mod">Reserva</h1>
			<div id="content-mod">
			<a id="closeM" href="#">X</a>
			<p><a href="registro.php">Registrate</a> para reservar.</p>
			</div>
		</div>
	<?php 
		include('vista/footer.php'); ?>	
</body>
</html>