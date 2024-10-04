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
		<form action="reserva2.php" method="POST">
		<div class="content"><p>Reservas</p></div>
		<div id="casilla">
			<section id="Sect">
				<label for="btn1"><a href="#modal" id="habit">
					Individual
					<button id="btn1" type="submit" name="btn1" value="Individual">
					</button>
				</a></label>
				<img src="../../imag/reservan.jpg" id="reserva">
			</section>
			<section id="Sect">
				<a href="#modal" id="habit">
					<input type="text" name="doble" value="Doble">
					<button id="btn2" type="submit" name="btn2"></button>
				</a>
				<img src="../../imag/reservad.jpg" id="reserva">
			</section>
			<section id="Sect">
				<a href="#modal" id="habit" name="matrimonial">Matrimonial</a>
				<img src="../../imag/reservam.jpg" id="reserva">
			</section>
			<section id="Sect">
				<a href="#modal" id="habit" name="vip">Suite</a>
				<img src="../../imag/reservav.jpg" id="reserva">
			</section>
		</div>
		</form>

		<form method="GET" action="reserva2.php">
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

				$consulta = "SELECT * FROM reservas where precio='$precio' AND habitacion ='$habit'";
				$resultado = mysqli_query($conex, $consulta);	
				$filas=mysqli_num_rows($resultado);

				if ($filas > 0) {
					echo "<tr><td>";
					echo $habitacion;
					echo "</td><td>";
					echo $precio;
					echo "</td></tr>";
				}
				if (isset($_POST['btn2'])) {
					echo "<tr><td>";
					echo $_POST['doble'];
					echo "</td><td>";
					echo "250.000</td></tr>";
	
				}
				if (isset($_POST['btn3'])) {
					echo "<tr><td>";
					echo $_POST['matrimonial'];
					echo "</td><td>";
					echo "320.000</td></tr>";
				}
				if (isset($_POST['btn4'])) {
					echo "<tr><td>";
					echo $_POST['suite'];
					echo "</td><td>";
					echo "400.000</td></tr>";
				}
			$resultado = mysqli_query($conex, $consulta);

           	while ($muestra=mysqli_fetch_array($resultado)){
           		if($_POST['normal']=$muestra['habitacion']){
           		echo $muestra['habitacion'];
           		echo $muestra['precio'];
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