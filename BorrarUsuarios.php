<?php>

 $idusuario=($GET['variable']);
 echo $idusuario;
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Confirma IdUsuarios</title>
		<meta name="viewport" content="width=divice-width,
			user-scalable=no,initial-scale=1,maximum-scale=1,
			minimum-scale=1">
			<link rel="stylesheet" href="css\estilos.css">
	</head>
	<body>
		<form action="eliminarU.php" method="POST" >
			<h2>Confirma el id que deseas borrar</h2>
			<input type="text" placeholder="&#128104; idUsuarios" name="idUsuarios" required>
			<input type="submit" value="Borrar">
			</form>
	    <form action="DB_Usuarios.php" method="POST">
			<input type="submit" value="Cancelar">
			</form>
	</body>
<?php>
