<?php
require 'conexion.php';
$idUsuarios=$_POST['idUsuarios'];
$query = "DELETE  FROM usuarios WHERE idUsuarios='$idUsuarios' LIMIT 1";
$resultado=mysqli_query($conexion, $query);
   
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
						<h3>Usuario Eliminado Exitosamente</h3>
						<?php } else { ?>
						<h3>Error al Eliminar Usuario</h3>
					<?php } ?>
					<a href="DB_Usuarios.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>