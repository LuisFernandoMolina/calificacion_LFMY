<?php
require 'conexion.php';

$Nombre = $_POST["Nombre"];
$clave = $_POST["clave"];
$Tipos_usuarios_idTipos_usuarios = $_POST["Tipos_usuarios_idTipos_usuarios"];

/*foreach ($_POST['Tipos_usuarios_idTipos_usuarios'] as $Tipos_usuarios_idTipos_usuarios);*/
$error_message = "";
//Validar usuario no este vacio
if($Nombre==""){
  $error_message="Ingrese un nombre de usuario";
}
  // Realiza la validación de contraseñas
if (strlen($clave) < 4) {
  $error_message = " introduzca maximo 4 caracteres";
}

///echo $error_message;

$verifica="SELECT * FROM usuarios WHERE Nombre='$Nombre'";
$verifica=mysqli_query($conexion,$verifica);
$fil=mysqli_num_rows($verifica);
  if($fil>0){
    echo 'El usuario ya existe';
  }
  else
  {
    $insertar ="INSERT INTO usuarios (Nombre, clave, Tipos_usuarios_idTipos_usuarios) VALUES('$Nombre', '$clave', '$Tipos_usuarios_idTipos_usuarios')"; //falta el parametro de tipo de usuario
    $resultado = mysqli_query($conexion, $insertar);
    if(!$resultado){
      echo 'Error al registrarse';
    }
    else{
        header("index.php");
    }
    mysqli_close($conexion);
  }
?>
<html lang="es">
	<head>
	<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					<a href="DB_Usuarios.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
