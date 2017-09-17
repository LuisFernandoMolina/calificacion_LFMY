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
				<h3 style="text-align:center">Nuevo Usuario</h3>
			</div>

			<form class="form-horizontal" method="POST" action="guardarU.php" autocomplete="off">

				<div class="form-group">
					<label for="Nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Clave" class="col-sm-2 control-label">Clave</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="clave" name="clave" placeholder="clave" required>
					</div>
				</div>

        <div class="form-group">
					<label for="tipo_usuario" class="col-sm-2 control-label">Tipo de usuario</label>
					<div class="col-sm-10">

						<select class="form-control" name="Tipos_usuarios_idTipos_usuarios" id="Tipos_usuarios_idTipos_usuarios">
							  <option value="0" selected >Usuario</option>
								<option value="1">Director</option>
								<option value="2">Maestro</option>
								<option value="3">Estudiante</option>
								<option value="4">Coordiandor</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="DB_Usuarios.php" class="btn btn-default">Cancelar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
