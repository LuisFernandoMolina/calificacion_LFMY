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
				<h3 style="text-align:center">Nuevo Grupo</h3>
			</div>
			<form class="form-horizontal" method="POST" action="guardarG.php" autocomplete="off">
				<div class="form-group">
					<br>
					<label for="Clave_grupo" class="col-sm-2 control-label">Clave del Grupo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Clave_grupo" name="Clave_grupo" placeholder="Clave del grupo" required>
					</div>
				</div>

			</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="DB_Grupos.php" class="btn btn-default">Cancelar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
