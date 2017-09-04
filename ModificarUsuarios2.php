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
