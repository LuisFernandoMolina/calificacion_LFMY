<?php
require 'conexion.php';

$idUsuarios = $_POST["idUsuarios"];
$Nombre = $_POST["Nombre"];
$clave = $_POST["clave"];
$Tipos_usuarios_idTipos_usuarios = $_POST["Tipos_usuarios_idTipos_usuarios"];

$insertar ="UPDATE usuarios SET Nombre='$Nombre', clave='$clave', Tipos_usuarios_idTipos_usuarios='$Tipos_usuarios_idTipos_usuarios' WHERE idUsuarios='$idUsuarios'";

$resultado=mysqli_query($conexion, $insertar);
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
						<h3>Usuario Modificado Exitosamente</h3>
						<?php } else { ?>
						<h3>Error al Modificar Usuario</h3>
					<?php } ?>
					<a href="DB_Usuarios.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
