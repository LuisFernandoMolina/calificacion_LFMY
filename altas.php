<?php
	include 'conexion.php';

	$Nombre = $_POST["Nombre"];
	$clave = $_POST["clave"];
    // Realiza la validación de contraseñas
	$error_message = "";
	if (strlen($clave) < 6) {
		$error_message = "La contraseña es demasiado corta. Por favor, introduzca al menos 6 caracteres";
	} else if ( $clave != $_POST["confclave"]) {
		$error_message = "Las contraseñas no coinciden. Por favor, inténtelo de nuevo";
	}
	echo $error_message;
	
	$verifica="SELECT COUNT(Nombre)FROM usuarios WHERE Nombre='$Nombre'";
	$verifica=mysqli_query($conexion,$verifica);
	//$verifica=mysqli_query($verifica);
	
	
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
			echo 'Registro exitoso';
		}
		mysqli_close($conexion);
	}

?>

