<?php
	include('../../conexion/sesion.php');

?>
<!DOCTYPE html>
<html lang="es">
<?php
		include_once('../libreria.php');
	 ?> 
<body>
	<?php include('header.php');
	 ?>
		<form action="reserva4.php#modal" method="POST">
		<div class="content"><p>Reservas</p></div>
		<div id="casilla">
			<section id="Sect">
				<label for="btn1"><a href="#modal" id="habit" onclick="funcion();">
					<button id="btn1" type="submit" name="btn1">Individual
					</button>
				</a></label>
				<img src="../../imag/reservan.jpg" id="reserva">
			</section>
			<section id="Sect">
				<a href="#modal" id="habit" onclick="funcion();">
					<button id="btn2" type="submit" name="btn2" onclick="funcion();">Doble</button>
				</a>
				<img src="../../imag/reservad.jpg" id="reserva">
			</section>
			<section id="Sect">
				<a href="#modal" id="habit" name="matrimonial" onclick="funcion();">Matrimonial</a>
				<img src="../../imag/reservam.jpg" id="reserva">
			</section>
			<section id="Sect">
				<a href="#modal" id="habit" name="vip" onclick="funcion();">Suite</a>
				<img src="../../imag/reservav.jpg" id="reserva">
			</section>
		</div>
		</form>

		<form method="POST" action="reserva4.php">
		<div id="modal"><h1 id="title-mod">Reserva</h1>
			<div id="content-mod">
			<a id="closeM" href="">X</a>
			<p>Esta habitacion es:
			<table>
				<tr>
					<td>Habitacion</td>
					<td>Precio</td>
				</tr>
				<?php 

					include('../../conexion/conexion.php');

				$consulta = "SELECT * FROM reservas where id_cuarto= '&idc'";	
				$result = mysqli_query($conex, $consulta);

				while($mostrar = mysqli_fetch_array($result)){

				if  (isset($_POST['btn1'])){
					$idc = 1;
					echo "<tr><td>";
					echo $mostrar['habitacion'];
					echo "</td><td>";
					echo $mostrar['precio'];
					echo "</td></tr>";
				}
				if (isset($_POST['btn2'])) {
					
					echo "<tr><td>";
					echo $mostrar['habitacion'];
					echo "</td><td>";
					echo $mostrar['precio'];
					echo "</td></tr>";
					
				}
				if (isset($_POST['matrimonial'])) {
					
					echo "<tr><td>";
					echo $mostrar['habitacion'];
					echo "</td><td>";
					echo $mostrar['precio'];
					echo "</td></tr>";
					
				}
				if ($_POST['vip']) {
					
					echo "<tr><td>";
					echo $mostrar['habitacion'];
					echo "</td><td>";
					echo $mostrar['precio'];
					echo "</td></tr>";
					
				}
			}
			
						?>
			<!--Si la variable es igual a la tabla que muestre dichos datos solo si es igual
					Al clickear btn1
					echo la primera fila de la tabla
					el clickear btn2
					echo la segunda fila de la tabla
				asi con todas las habitaciones


			-->			
			</table></p>
			<p><label class="icon-user"></label><input type="text" name="nombre" placeholder="Ingrese su nombre" required></p>
			<p><label class="icon-credit-card"></label><input type="text" name="pago" placeholder="Ingrese su Refererencia" required></p>
			<p><label class="icon-calendar"></label><input type="date" name="fecha" placeholder="Ingrese su fecha de reserva" required></p>

			</div>
			<?php include('../../conexion/transferencia.php');?>

		</div>
		</form>
	<?php 
		include('../footer.php'); ?>	
</body>
</html>