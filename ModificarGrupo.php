<?php
	require "conexion.php";
	$idGrupos=$_POST['idGrupos'];
	$consulta="SELECT * FROM grupos WHERE idGrupos='$idGrupos'";
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
	<title> Modificar Grupo </title>
</head>
<body>
<h1><center>Moficacion de Grupos</center></h1>
<div class="container">

	<form class="form-horizontal" action="modificarG.php" method="POST" >
	<div class="form-group">
		<label class="col-sm-2 control-label">Datos del Grupo </label>

	</div>
	<div class="form-group">

		<label for="idGrupos" class="col-sm-2 control-label">Id Grupos</label>
		<div class="col-sm-10">
		 <input class="form-control" style="WIDTH:100px; HEIGHT:30px" size=32 input name="idGrupos" class="form-input" value=<?php echo "\"".$dato['idGrupos']."\""; ?> required>
		</div>
	</div>

	<div class="form-group">

		<label for="Clave_grupo" class="col-sm-2 control-label">Clave Grupo</label>
		<div class="col-sm-10">
		 <input class="form-control" style="WIDTH:100px; HEIGHT:30px" size=32 input name="Clave_grupo" class="form-input" value=<?php echo "\"".$dato['Clave_grupo']."\""; ?> required>
		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success" value="Modificar Materia">Modificar</button>
			<a href="DB_Grupos.php" class="btn btn-primary">Regresar</a>
		</div>

	</div>

</div>


 <br /><h3> <!--<a ALIGN=center href="DB_Usuarios.php">REGRESAR</a></h3>-->
<br /> <center>
</center>
</form>
</body>
</html>
