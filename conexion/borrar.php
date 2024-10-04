<?php
include("conexion.php");

		if(isset($_POST['borrar'])){
				$borradito = $_POST['borrar'];
                $sql= "DELETE FROM usuarios where id = '$borradito'";
                $result = mysqli_query($conex, $sql);
				
                
                header("location: ../vista/adm/index.php");
            	}
            else{
            echo "chao";

            }
			
?>	
