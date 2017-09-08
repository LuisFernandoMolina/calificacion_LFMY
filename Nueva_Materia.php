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
				<h3 style="text-align:center">Nueva Materia</h3>
			</div>
			<form class="form-horizontal" method="POST" action="guardarM.php" autocomplete="off">
				<div class="form-group">
					<label for="Nombre_materia" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nombre_materia" name="Nombre_materia" placeholder="Nombre de materia" required>
					</div>
				</div>
				<div class="form-group">
					<label for="Horario" class="col-sm-2 control-label">Horario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Horario" name="Horario" placeholder="Horario" required>
					</div>
				</div>
				<div class="form-group">
					<label for="Salon" class="col-sm-2 control-label">Salon</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Salon" name="Salon" placeholder="Salon" required>
					</div>
				</div>
				<div class="form-group">
					<label for="grupos" class="col-sm-2 control-label">Grupo</label>
						<div class="col-sm-10">
							<select name="idGrupo" id="idGrupo" class="form-control" placeholder="Grupo" required>
								<option value=""></option>
								<?php require 'funciones.php';
								grupos();
								?>
							</select>
						</div>
				</div>
				<div class="form-group">
							<label for="" class="col-sm-2 control-label">IdCalificacion</label>
							<div class="col-sm-10">
								<select class="form-control" name="calificacion" id="calificaion">
									<option value=""></option>
									 calificacion();
								</select>
							</div>

				</div>
				</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="DB_Materias.php" class="btn btn-default">Cancelar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
