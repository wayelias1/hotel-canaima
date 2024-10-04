<?php
	include('../../conexion/sesion.php');

?>
<!DOCTYPE html>
<html lang="es">
<?php 
	include('../libreria.php');
  ?>
<body>
	<?php
		include('header.php');
	 ?>
	 	<p><img src="../../imag/contacto-mapa.png" id="contact">Ubicado en la esquina de Conde a Principal, El Conde, Avenida Sur 4, Caracas 1010, Distrito Capital. El hotel el conde brinda las más amplias instalaciones le hará pasar momentos inolvidables en un ambiente seguro y agradable.</p>
			<p>Aca pueden ver la localización del motel en google maps para que sepan como llegar por si no lo saben</p>
			<p id="locate"><a href="https://www.google.com/maps/place/Hotel+El+Conde/@10.5065396,-66.9162383,17z/data=!4m8!3m7!1s0x8c2a5eda9a70a96f:0xfad28ead1b79b6d7!5m2!4m1!1i2!8m2!3d10.5064976!4d-66.9160113"><img id="locate2" src="../../imag/Hotelubicacion.png" target="_blank"></a></p>
		<div class="cont">
			<p>Contactos del Hotel</p>
				<ul>
					<li><label class="icon-mail"></label> invricumaca@gmail.com</li>
					<li><label class="icon-phone"></label> 860.11.71 / 861.32.32</li>
				</ul>
			</div>
		<form action="contactos.php" method="POST">
			<table id="comentario">
			<tbody>
			<td><p id="comentario-tit">Comentario<p></td>
			<tr><td>
				<p class="icon-user"></p><input type="text" name="nombre" placeholder="Ingrese su nombre" required>
			</td></tr>
			<tr><td>
				<p class="icon-mail"></p><input type="email" name="correo" placeholder="Ingresa un correo" required>
			</td></tr>
			<tr><td>
				<input type="text" id="cuadro" name="comentario" placeholder="Ingresa tu comentario" required>
			</td></tr>
			<tr><td><button type="submit">Enviar comentario</button></td></tr>
			</tbody>
			</table>
			</form>
			<?php include('../../comentarios.php');?>
	<?php include('../footer.php'); ?>
</body>
</html>