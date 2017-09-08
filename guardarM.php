<?php
require 'conexion.php';

$Nombre_materia= $_POST["Nombre_materia"];
$Horario = $_POST["Horario"];
$Salon = $_POST["Salon"];

$Grupos_idGrupos=1;
$Calificacion_idCalificacion=1;

/*foreach ($_POST['Tipos_usuarios_idTipos_usuarios'] as $Tipos_usuarios_idTipos_usuarios);*/
$error_message = "";
//Validar usuario no este vacio
if($Nombre_materia==""){
  $error_message="Ingrese un nombre de Materia";
}
echo $error_message;

$verifica="SELECT * FROM materias WHERE Nombre_materia='$Nombre_materia'";
$verifica=mysqli_query($conexion,$verifica);
$fil=mysqli_num_rows($verifica);
  if($fil>0){
    echo 'El usuario ya existe';
  }
  else
  {
    $insertar ="INSERT INTO materias (Nombre_materia, Horario, Salon,Grupos_idGrupos,Calificacion_idCalificacion) VALUES('$Nombre_materia', '$Horario', '$Salon','$Grupos_idGrupos','$Calificacion_idCalificacion')"; //falta el parametro de tipo de usuario
    $resultado = mysqli_query($conexion, $insertar);
    if(!$resultado){
      echo 'Error al registar Materia';
      echo $Grupos_idGrupos;
      echo $Grupos_idGrupos;
    }
    else{
        header("index.php");
    }
    mysqli_close($conexion);
  }
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
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					<a href="DB_Materias.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
