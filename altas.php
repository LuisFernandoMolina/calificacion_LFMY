<?php
	require 'conexion.php';

	$Nombre = $_POST["Nombre"];
	$clave = md5($_POST["clave"]);
	$Tipos_usuarios_idTipos_usuarios = 0;
	echo $clave;


	/*foreach ($_POST['Tipos_usuarios_idTipos_usuarios'] as $Tipos_usuarios_idTipos_usuarios);*/
	$error_message = "";
	//Validar usuario no este vacio
	if($Nombre==""){
		$error_message="Ingrese un nombre de usuario";
	}
    // Realiza la validación de contraseñas
	if (strlen($clave) < 3) {
		$error_message = "La contraseña es demasiado corta. Por favor, introduzca al menos 6 caracteres";
	} else if ( $clave != md5($_POST["confclave"])) {
		$error_message = "Las contraseñas no coinciden. Por favor, inténtelo de nuevo";
	}
	echo $error_message;

	$verifica="SELECT * FROM usuarios WHERE Nombre='$Nombre'";
	$verifica=mysqli_query($conexion,$verifica);
	$fil=mysqli_num_rows($verifica);
		if($fil>0){
			echo 'El usuario ya existe';
		}
		else
		{
		  $insertar ="INSERT INTO usuarios (Nombre, clave, Tipos_usuarios_idTipos_usuarios) VALUES('$Nombre', '$clave', '$Tipos_usuarios_idTipos_usuarios')"; //falta el parametro de tipo de usuario
			echo($insertar);
			$resultado = mysqli_query($conexion, $insertar);
			if(!$resultado){
				echo 'Error al registrarse';
			}
			else{
					header("location:index.html");
			}
			mysqli_close($conexion);
		}

?>
