<?php
	include 'conexion.php';

	$Nombre = $_POST["Nombre"];
	$clave = $_POST["clave"];

	$verifica="SELECT COUNT(Nombre)FROM usuarios WHERE Nombre='$nombre'";
	$verifica=mysqli_query($conexion,$verifica);
	$verifica=mysqli_query($verifica));
	if($verifica[0]>="1")
	{
		echo 'El usuario ya existe';
	}
	else
	{
		$insertar ="INSERT INTO usuarios (nombre, clave) VALUES('$nombre, $clave')";
		$resultado = mysqli_quert($conexion, $insertar);

		if(!$resultado){
			echo 'Error al registrarse';
		}
		else{

		}
		mysqli_close($conexion);
	}

?>

