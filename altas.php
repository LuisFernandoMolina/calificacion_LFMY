<?php
	include 'conexion.php';

	$Nombre = $_POST["Nombre"];
	$clave = $_POST["clave"];
	$error_message = "";
	//Validar usuario no este vacio
	if($Nombre==""){ 
		$error_message="Ingrese un nombre de usuario"; 
	} 
    // Realiza la validación de contraseñas
	/*if (strlen($clave) < 3) {
		$error_message = "La contraseña es demasiado corta. Por favor, introduzca al menos 6 caracteres";
	} else if ( $clave != $_POST["confclave"]) {
		$error_message = "Las contraseñas no coinciden. Por favor, inténtelo de nuevo";
	}
	echo $error_message;*/
	
	$verifica="SELECT * FROM usuarios WHERE Nombre='$Nombre'";
	$verifica=mysqli_query($conexion,$verifica);
	$fil=mysqli_num_rows($verifica);
		if($fil>0){
			echo 'El usuario ya existe';
		}
		else
		{
			$insertar ="INSERT INTO usuarios (Nombre, clave) VALUES('$Nombre, $clave')";
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

