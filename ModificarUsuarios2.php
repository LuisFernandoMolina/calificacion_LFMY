<?php
	require "conexion.php";
	$idUsuarios=$_POST['idUsuarios'];
	$consulta="SELECT * FROM usuarios WHERE idUsuarios='$idUsuarios'";
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

<label>Datos del Usuario a Modificar: </label><br />
<!--<input type="hidden" input name="idUsuarios" value=<?php echo "\"".$dato['id']."\""; ?> class="form-input" required>

<input input name="Nombre" value=<?php echo "\"".$dato['Nombre']."\""; ?> class="form-input" required><br />-->
		
		idUsuarios:<br /> <input style="WIDTH:350px; HEIGHT: 20px" size=32 input name="idUsuarios" class="form-input" value=<?php echo "\"".$dato['idUsuarios']."\""; ?> required><br />
		Nombre: <br /><input style="WIDTH:350px; HEIGHT: 20px" size=32 input name="Nombre" class="form-input" value=<?php echo "\"".$dato['Nombre']."\""; ?> required><br />
		Clave: <br /><input style="WIDTH:350px; HEIGHT: 20px" size=32 input name="clave" class="form-input" value=<?php echo "\"".$dato['clave']."\""; ?> required><br />
		Tipos_usuarios_idTipos_usuarios:<br /> <input style="WIDTH:350px; HEIGHT: 200px" size=32 input name="Tipos_usuarios_idTipos_usuarios" class="form-input" value=<?php echo "\"".$dato['Tipos_usuarios_idTipos_usuarios']."\""; ?> required><br />
	<br /> <input type="submit" class="button" value="Modificar Usuario">
 <br /><h3> <a ALIGN=center href="DB_Usuarios.php">REGRESAR</a></h3>
<br /> <center>
</center>
</form>
</body>
</html>
