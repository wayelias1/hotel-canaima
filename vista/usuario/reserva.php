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
		<form action="reserva.php#modal" method="POST">
		<div class="content"><p>Reservas</p></div>
		<div id="casilla">
			<section id="Sect">
					<button id="habit" type="submit" onclick="funcion();" name="btn1">Individual
					</button>
				<img src="../../imag/reservan.jpg" id="reserva">
			</section>
			<section id="Sect">
				<button id="habit" type="submit" onclick="funcion();" name="btn2">Doble
					</button>
				<img src="../../imag/reservad.jpg" id="reserva">
			</section>
			<section id="Sect">
				<button id="habit" type="submit" onclick="funcion();" name="btn3">Matrimonial
					</button>
				<img src="../../imag/reservam.jpg" id="reserva">
			</section>
			<section id="Sect">
				<button id="habit" type="submit" onclick="funcion();" name="btn4">Suite
					</button>
				<img src="../../imag/reservav.jpg" id="reserva">
			</section>
		</div>
		</form>

		<form method="POST" action="reserva3.php">
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

				$consulta = "SELECT * FROM reservas where id_cuarto= 1";	
				$result = mysqli_query($conex, $consulta);

				while($mostrar = mysqli_fetch_array($result)){

				if  (isset($_POST['btn1'])){
					echo "<tr><td>";
					echo $mostrar['habitacion'];
					echo "</td><td>";
					echo $mostrar['precio'];
					echo "</td></tr>";
				}
				if (isset($_POST['btn2'])) {
					$consulta = "SELECT * FROM reservas where id_cuarto= 2";	
					$result = mysqli_query($conex, $consulta);

					while($mostrar = mysqli_fetch_array($result)){
					echo "<tr><td>";
					echo $mostrar['habitacion'];
					echo "</td><td>";
					echo $mostrar['precio'];
					echo "</td></tr>";
					}
				}
				if (isset($_POST['btn3'])) {
					$consulta = "SELECT * FROM reservas where id_cuarto= 3";	
					$result = mysqli_query($conex, $consulta);

					while($mostrar = mysqli_fetch_array($result)){
					echo "<tr><td>";
					echo $mostrar['habitacion'];
					echo "</td><td>";
					echo $mostrar['precio'];
					echo "</td></tr>";
					}
				}
				if (isset($_POST['btn4'])) {
					$consulta = "SELECT * FROM reservas where id_cuarto= 4";	
					$result = mysqli_query($conex, $consulta);

					while($mostrar = mysqli_fetch_array($result)){
					echo "<tr><td>";
					echo $mostrar['habitacion'];
					echo "</td><td>";
					echo $mostrar['precio'];
					echo "</td></tr>";
					}
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
			<p><label class="icon-calendar">Inicio:</label><input type="date" name="fecha" required></p>
			<p><label class="icon-calendar">Salida:</label><input type="date" name="fecha2" required></p>
			<button type="submit" id="boton">Reservar</button>

			</div>
			<?php include('../../conexion/transferencia.php');?>

		</div>
		</form>
	<?php 
		include('../footer.php'); ?>	
</body>
</html>