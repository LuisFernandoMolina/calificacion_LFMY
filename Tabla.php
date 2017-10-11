<?php
	
	//Prueba de como debe quedar la tabla
	$chart ['chart_data'] = array ( array ("Materias",     "Quimica", "Fisica"),
									array ("Alumnos",       "",        ""     ),
									array ("Fernando",         10,        9    ),
									array ("Cecilia",           9,        8   ),
									array ("Raul",              10,       8  )
								);
 	print_r($chart);



	

	//Aqui es el codigo para nuestra tabla
	// Con esto conectamos la base de datos
	/*require 'conexion.php';

	mysql_select_db('chart') or die('No se pudo selecciona la base de datos');

	//Preparamos la consutla
	$SQLDatos ="SELECT * FROM datos";

	//Ejecutamos la consulta
	$result = mysqli_query($SQLDatos); */



	

?>
