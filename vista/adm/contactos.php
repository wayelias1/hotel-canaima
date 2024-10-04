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

		<div class="cont">
			<p>Contactos de la pagina</p>
				<ul>
					<li><label class="icon-mail"></label> devoloper@gmail.com</li>
					<li><label class="icon-phone"></label> 0416.933.21.58</li>
				</ul>
			<table>
				<tbody>
        <?php
        include('../../conexion/conexion.php');
        $consulta = "SELECT * FROM comentarios";
		$resultado = mysqli_query($conex, $consulta);

           	while ($muestra=mysqli_fetch_array($resultado)){
            	echo "<tr>";
            	echo "<td>";
                echo $muestra['nombre'];
                echo "</td><td>";
                echo $muestra['correo'];
                echo "</td><td>";
                echo $muestra['comentario'];
                echo "</td>";
                echo "<td><button name='borrar'>Eliminar</button></td>";
                echo "</tr>";
            }

        ?>
    		</tbody>
			</table>
		</div>
	<?php include('../footer.php'); ?>
</body>
</html>