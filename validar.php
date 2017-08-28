<?php 
	//require de la conexion
	include("conexion.php");
	$username=$_POST['usuario'];
	$pass=$_POST['clave'];
	//Consulta a la base 
	$consulta="SELECT*FROM usuarios WHERE Nombre='$username' and clave='$pass'";
	$resultado=mysqli_query($conexion,$consulta);
	
	$filas=mysqli_num_rows($resultado);
		if($filas>0){
			header("location:home.php");
		}
		else{
			echo "Error en la autentificacion";
		}
	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>
