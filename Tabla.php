<?php
	
	//Prueba de como debe quedar la tabla
//Referencias:
	//http://panamahitek.com/graficas-con-canvasjs/
	//http://www.maani.us/charts4/index.php?menu=Tutorial&submenu=Chart_Data
	//Prueba de como debe quedar la tabla
	/*$chart ['chart_data'] = array ( array ("Materias",     "Quimica", "Fisica"),
									array ("Alumnos",       "",        ""     ),
									array ("Fernando",         10,        9    ),
									array ("Cecilia",           9,        8   ),
									array ("Raul",              10,       8  )
								);
 	print_r($chart);*/



	

	//Aqui es el codigo para nuestra tabla
	// Con esto conectamos la base de datos
	require 'conexion.php';
	
	//Prueba 2:

	//http://panamahitek.com/graficas-con-canvasjs/
	$data_points = array();
	$result = mysqli_query($conexion, "SELECT * FROM usuarios");
	while ($row = mysqli_fetch_array($result)){
		$point = array("idUsuarios" => $row['Id'], "Nombre" => $row['Nombre'], "clave" => $row['clave'], "Tipos_usuarios_idTipos_usuarios" => $row['Tipos_usuarios_idTipos_usuarios']);
		array_push($data_points, $point);
	}
	echo json_encode($data_points);	






	
	/*
	//Preparamos la consutla
	$SQLDatos ="SELECT * FROM usuarios";

	//Ejecutamos la consulta
	$result = mysqli_query($conexion,$SQLDatos); 

	//Obtenemos el numero de filas
	$numFilas = mysqli_num_rows($result);

	//Cargamos el array los nombres de las metricas a visualizar
	$datos[0] = array('Alumnos');

	//Recorremos filas
	for ($i=1; $i<($numFilas+1); $i++)
	{
		$datos[$i] = array(mysql_result($result, $i-1, "alumnos"), (int) mysql_result($result, $i-1, "Calificaciones"));
	}
	*/

	



	

?>
