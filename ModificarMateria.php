<?php
	require "conexion.php";
	$idMaterias=$_POST['idMaterias'];
	$consulta="SELECT * FROM materias WHERE idMaterias='$idMaterias'";
	$consulta=mysqli_query($conexion, $consulta);
	$dato=mysqli_fetch_array($consulta);
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<head>
	<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
	<title> Modificar Materia </title>
</head>
<body>
<h1><center>Moficacion de Materias</center></h1>
<div class="container">

	<form class="form-horizontal" action="modificarM.php" method="POST" >
	<div class="form-group">
		<label class="col-sm-2 control-label">Datos de la Materia </label>

	</div>
	<div class="form-group">

		<label for="idMaterias" class="col-sm-2 control-label">Id Materia</label>
		<div class="col-sm-10">
		 <input class="form-control" style="WIDTH:100px; HEIGHT:30px" size=32 input name="idMaterias" class="form-input" value=<?php echo "\"".$dato['idMaterias']."\""; ?> required>
		</div>
	</div>
	<div class="form-group">
		<label for="Nombre" class="col-sm-2 control-label">Nombre</label>
		<div class="col-sm-10">
			<input  class="form-control" style="WIDTH:350px; HEIGHT: 30px" size=32 input name="Nombre_materia" class="form-input" value=<?php echo "\"".$dato['Nombre_materia']."\""; ?> required>
		</div>
	</div>
	<div class="form-group">
		<label for="clave" class="col-sm-2 control-label">Horario</label>
		<div class="col-sm-10">
			<input class="form-control" style="WIDTH:350px; HEIGHT: 30px" size=32 input name="Horario" class="form-input" value=<?php echo "\"".$dato['Horario']."\""; ?> required>
		</div>
	</div>
    <div class="form-group">
		<label for="clave" class="col-sm-2 control-label">Salon</label>
		<div class="col-sm-10">
			<input class="form-control" style="WIDTH:350px; HEIGHT: 30px" size=32 input name="Salon" class="form-input" value=<?php echo "\"".$dato['Salon']."\""; ?> required>
		</div>
	</div>
	<div class="form-group">
		<label for="Grupos_idGrupos" class="col-sm-2 control-label">Grupo</label>
		<div class="col-sm-10">
			<select class="form-control" class="form-input" input name="Grupos_idGrupos" id="Grupos_idGrupos">
					<?php include 'funciones.php'; showidgrupo($dato['Grupos_idGrupos']);
						grupos();
					?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="Calificacion_idCalificacion" class="col-sm-2 control-label">Calificación</label>
		<div class="col-sm-10">
			<select class="form-control" class="form-input" input name="Calificacion_idCalificacion" id="Calificacion_idCalificacion">
					<?php showidcalifi($dato['Calificacion_idCalificacion']);
					?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success" value="Modificar Materia">Modificar</button>
			<a href="DB_Materias.php" class="btn btn-primary">Regresar</a>
		</div>

	</div>

</div>


 <br /><h3> <!--<a ALIGN=center href="DB_Usuarios.php">REGRESAR</a></h3>-->
<br /> <center>
</center>
</form>
</body>
</html>
