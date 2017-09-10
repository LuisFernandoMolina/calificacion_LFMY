<?php
require 'conexion.php';

$idGrupos = $_POST["idGrupos"];
$Clave_grupo = $_POST["Clave_grupo"];


$insertar ="UPDATE grupos SET idGrupos='$idGrupos', Clave_grupo='$Clave_grupo' WHERE idGrupos='$idGrupos";

$resultado=mysqli_query($conexion, $insertar);
?>
 <html lang="es">
	<head>

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
						<h3>Grupo Modificado Exitosamente</h3>
						<?php } else { ?>
						<h3>Error al Modificar Grupo Usuario</h3>
					<?php } ?>
					<a href="DB_Grupos.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
