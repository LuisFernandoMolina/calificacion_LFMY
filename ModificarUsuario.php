<?php
	require "conexion.php";
	$idUsuarios=$_POST['idUsuarios'];
	$consulta="SELECT * FROM usuarios WHERE idUsuarios='$idUsuarios'";
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
	<title> Modificar Usuario </title>
</head>
<body>
<h1><center>Moficacion de Usuarios</center></h1>
<div class="container">

	<form class="form-horizontal" action="modificarU.php" method="POST" >
	<div class="form-group">
		<label class="col-sm-2 control-label">Datos del Usuario </label>

	</div>
	<div class="form-group">

		<label for="idUsuarios" class="col-sm-2 control-label">Id Usuario</label>
		<div class="col-sm-10">
		 <input class="form-control" style="WIDTH:100px; HEIGHT:30px" size=32 input name="idUsuarios" class="form-input" value=<?php echo "\"".$dato['idUsuarios']."\""; ?> required>
		</div>
	</div>
	<div class="form-group">
		<label for="Nombre" class="col-sm-2 control-label">Nombre</label>
		<div class="col-sm-10">
			<input  class="form-control" style="WIDTH:350px; HEIGHT: 30px" size=32 input name="Nombre" class="form-input" value=<?php echo "\"".$dato['Nombre']."\""; ?> required>
		</div>
	</div>
	<div class="form-group">
		<label for="clave" class="col-sm-2 control-label">Clave</label>
		<div class="col-sm-10">
			<input class="form-control" style="WIDTH:350px; HEIGHT: 30px" size=32 input name="clave" class="form-input" value=<?php echo "\"".$dato['clave']."\""; ?> required>
		</div>
	</div>
	<div class="form-group">
		<label for="tipo_usuario" class="col-sm-2 control-label">Tipo de usuario</label>
		<div class="col-sm-10">
			<select class="form-control" class="form-input" input name="Tipos_usuarios_idTipos_usuarios" id="Tipos_usuarios_idTipos_usuarios">
					<?php include 'funciones.php'; tipou($dato['Tipos_usuarios_idTipos_usuarios']) ?>
					<option value="0" input name="Tipos_usuarios_idTipos_usuarios">Usuario</option>
					<option value="1"name="Tipos_usuarios_idTipos_usuarios">Director</option>
					<option value="2"name="Tipos_usuarios_idTipos_usuarios">Maestro</option>
					<option value="3"name="Tipos_usuarios_idTipos_usuarios">Estudiante</option>
					<option value="4"name="Tipos_usuarios_idTipos_usuarios">Coordiandor</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success" value="Modificar Usuario">Modificar</button>
			<a href="DB_Usuarios.php" class="btn btn-primary">Regresar</a>
		</div>

	</div>

</div>


 <br /><h3> <!--<a ALIGN=center href="DB_Usuarios.php">REGRESAR</a></h3>-->
<br /> <center>
</center>
</form>
</body>
</html>
