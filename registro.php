<?php>

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Nuevo registro</title>
		<meta name="viewport" content="width=divice-width,
			user-scalable=no,initial-scale=1,maximum-scale=1,
			minimum-scale=1">
			<link rel="stylesheet" href="css\estilos.css">
	</head>
	<body>
		<form action="altas.php" method="POST" >
			<h2>Nuevo Registro</h2>
			<input type="text" placeholder="&#128104; Usuario" name="Nombre">

			<input type="password" placeholder="&#128272; Constrase�a" name="clave">
			<input type="password" placeholder="&#128272; Confirmar Contrase�a" name="confclave">

			<br>Seleccione el tipo de Usuario:<br>


			<input type="number" placeholder="&#128272; Introduce la Opcion" name="Tipos_usuarios_idTipos_usuarios">

			<br>1. Director<br>
			<br>2. Docente<br>
			<br>3. Estudiante<br>
			<br>4. Coordinador<br>
			<input type="submit" value="Registrar">

			</form>
			<form action="index.html" method="POST">
			<input type="submit" value="Cancelar">
			</form
			</form>

	</body>
<?php>
