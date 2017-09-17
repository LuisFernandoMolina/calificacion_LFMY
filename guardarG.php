<?php
require 'conexion.php';

$Clave_grupo= $_POST["Clave_grupo"];


/*foreach ($_POST['Tipos_usuarios_idTipos_usuarios'] as $Tipos_usuarios_idTipos_usuarios);*/
$error_message = "";
//Validar usuario no este vacio
if($Clave_grupo==""){
  $error_message="Ingrese la clave del grupo";
}
echo $error_message;

$verifica="SELECT * FROM grupos WHERE Clave_grupo='$Clave_grupo'";
$verifica=mysqli_query($conexion,$verifica);
$fil=mysqli_num_rows($verifica);
  if($fil>0){
    echo 'El grupo ya existe';
  }
  else
  {
    $insertar ="INSERT INTO grupos (Clave_grupo) VALUES('$Clave_grupo')"; //falta el parametro de tipo de usuario
    $resultado = mysqli_query($conexion, $insertar);
    if(!$resultado){
      echo 'Error al registar el Grupo';
    }
    else{
        header("/constitucion/calificacion_LFMY/DB_Grupos.php");
    }
    mysqli_close($conexion);
  }
?>
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
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					<a href="DB_Grupos.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
