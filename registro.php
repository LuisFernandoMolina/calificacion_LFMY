<?php>

	<head>
	<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
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
			<input type="text" placeholder="&#128104; Usuario" name="Nombre" required>
			<input type="password" placeholder="&#128272; Constraseña" name="clave" required>
			<input type="password" placeholder="&#128272; Confirmar Contraseña" name="confclave" required>
			<input type="submit" value="Registrar">
			<a href="index.html"><input type="button" value="Cancelar"></a>
			</form>

	</body>
<?php>
