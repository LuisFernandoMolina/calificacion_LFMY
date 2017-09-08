<?php
	require "conexion.php";
	$idUsuarios=$_POST['idUsuarios'];
	$consulta="SELECT * FROM usuarios WHERE idUsuarios= '$idUsuarios'";
	$consulta=mysqli_query($conexion, $consulta);
	$dato=mysqli_fetch_array($consulta);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Modificar Usuario </title>
</head>
<body>
<h1><center>Moficacion de Usuarios</center></h1>
<form action="modificarU.php">

<label>Nombre del Usuario: </label><br />
<input type="hidden" input name="idUsuarios" value=<?php echo "\"".$dato['id']."\""; ?> class="form-input" required>

<input input name="nombreP" value=<?php echo "\"".$dato['Nombre']."\""; ?> class="form-input" required><br />
		Giro al que pertenece el proyecto:<br /> <input style="WIDTH:350px; HEIGHT: 20px" size=32 input name="giroP" class="form-input" value=<?php echo "\"".$dato['giroP']."\""; ?> required><br />

		Desarrollo:
		Fecha de Inicio:<br /> <input style="WIDTH:350px; HEIGHT: 20px" size=32 input name="fechaIP" class="form-input" value=<?php echo "\"".$dato['fechaIP']."\""; ?> required><br />
		Fecha de Termino: <br /><input style="WIDTH:350px; HEIGHT: 20px" size=32 input name="fechaTP" class="form-input" value=<?php echo "\"".$dato['fechaTP']."\""; ?> required><br />
		Asesor: <br /><input style="WIDTH:350px; HEIGHT: 20px" size=32 input name="asesorP" class="form-input" value=<?php echo "\"".$dato['asesorTP']."\""; ?> required><br />
		Breve Descripciop del proyecto:<br /> <input style="WIDTH:350px; HEIGHT: 200px" size=32 input name="descP" class="form-input" value=<?php echo "\"".$dato['descP']."\""; ?> required><br />
	<br /> <input type="submit" class="button" value="Enviar mis datos">
 <br /><h3> <a ALIGN=center href="index.php">REGRESAR</a></h3>
<br /> <center>
