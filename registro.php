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
			<input type="password" placeholder="&#128272; Constraseņa" name="clave">
			<input type="password" placeholder="&#128272; Confirmar Contraseņa" name="confclave">
			<form>
			<div class="radio">
				<h2>Tipo de usuario</h2>
				

				<label for="director">Director</label> 
				<input type="radio" name="tipou" id="director" value="0"/> 
				
				<label for="docente">Docente</label>
				<input type="radio" name="tipou" id="docente" value="1">
				
				<label for="estudiante">Estudiante</label>
				<input type="radio" name="tipou" id="estudiante" value="2">

				<label for="coordinador">Coordinador</label>
				<input type="radio" name="tipou" id="coordinador" value="3">
				
				<input type="submit" value="Registrar">
			</div>
			</form>
			<form action="index.html" method="POST">
			<input type="submit" value="Cancelar">
			</form>
			</form>
				
	</body>
<?php>