<?php
require 'conexion.php';

$idMaterias = $_POST["idMaterias"];
$Nombre_materia = $_POST["Nombre_materia"];
$Horario = $_POST["Horario"];
$Salon = $_POST["Salon"];
$Grupos_idGrupos = $_POST["Grupos_idGrupos"];
$Calificacion_idCalificacion = $_POST["Calificacion_idCalificacion"];


$insertar ="UPDATE materias SET idMaterias='$idMaterias', Nombre_materia='$Nombre_materia', Horario='$Horario', Salon='$Salon', Grupos_idGrupos='$Grupos_idGrupos', Calificacion_idCalificacion='$Calificacion_idCalificacion' WHERE idMaterias='$idMaterias'";

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
						<h3>Materia Modificada Exitosamente</h3>
						<?php } else { ?>
						<h3>Error al Modificar Materias Usuario</h3>
					<?php } ?>
					<a href="DB_Materias.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
