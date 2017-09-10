<?php
require 'conexion.php';
$idGrupos=$_POST['idGrupos'];
$query = "DELETE  FROM grupos WHERE idGrupos='$idGrupos' LIMIT 1";
$resultado=mysqli_query($conexion, $query);
   
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
						<h3>Grupo Eliminado Exitosamente</h3>
						<?php } else { ?>
						<h3>Error al Eliminar Grupo</h3>
					<?php } ?>
					<a href="DB_Grupos.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>