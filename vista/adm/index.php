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
		<p>Lista de usuarios</p>		
        <form method="POST" action="../../conexion/borrar.php">
        <table>
        	<tbody>
        <?php
        include('../../conexion/conexion.php');
        $consulta = "SELECT * FROM usuarios WHERE tipo='1'";
		$resultado = mysqli_query($conex, $consulta);

           	while ($muestra=mysqli_fetch_array($resultado)){
            	echo '<tr>';
            	echo '<td>';
                echo $muestra['user'];
                echo '</td><td>';
                echo $muestra['correo'];
                echo '</td>';
                echo '<td><button name="borrar" value="'.$muestra['id'].'"> Eliminar</button></td>';
                echo '</tr>';
            }

        ?>
    		</tbody>
    	</table>
    </form>
	<?php 
		include('../footer.php'); ?>	
</body>
</html>