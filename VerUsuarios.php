<html>
<head>
	<title>Pagina de Visualizacion de Usuarios del Sistema</title>
</head>
<body>

	<h1><center>Bienvenido Administrador, en esta pagina puedes consultar los usuarios registrados en el sistema</center></h1>
	<h2><center>Visualizacion de Usuarios</center></h2>

	<form action="" method="post">

	<?php
		include "conexion.php";
		$query="SELECT * FROM usuarios";
		$query=mysqli_query($conexion,$query);

		echo "<div class=\"container\" >";
    echo "<div class=\"row\" >";

    echo "<div class=\"col-md-2\" style=\"width::20%\"></div>";

    echo "<div class=\"col-md-2\" style=\"width:60%\" ><table class=\"table table-stripped\" style=\"color:black\"  width=\"100%\"><tr >";
    echo  "<td style=\"border: solid black 3px;background-color:gray\">idUsuario</td>";
    echo  "<td style=\"border: solid black 3px;background-color:gray\">Nombre</td>";
    echo  "<td style=\"border: solid black 3px;background-color:gray\">clave</td>";
    echo  "<td style=\"border: solid black 3px;background-color:gray\">Tipos_usuarios_idTipos_usuarios</td>";
    echo "</tr>";
    while($result=mysqli_fetch_array($query))
    {
      echo 
      "<tr ><td style=\"border: solid black 3px;background-color:white\">".$result['idUsuarios'].
      "</td><td style=\"border: solid black 3px;background-color:white\">".$result['Nombre'].
      "</td><td style=\"border: solid black 3px;background-color:white\">".$result['clave'].
      "</td><td style=\"border: solid black 3px;background-color:white\">".$result['Tipos_usuarios_idTipos_usuarios']."</td></tr>";
    }
    echo "</table></div>";
    echo "<div class=\"col-md-2\" style=\"width:20%\"> </div></div></div>";

    ?>
