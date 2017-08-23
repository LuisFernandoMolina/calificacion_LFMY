<?php
	include 'validar.php';
	$Nombre =$_POST["Nombre"];
	$clave =$_POST["clave"];
	$ver_existencia="SELECT COUNT(Nombre) FROM usuarios WHERE Nombre='$Nombre'";
	$ver_existencia=mysqli_query($conexion,$ver_existencia);
	$ver_existencia=mysql_fetch_array($ver_existencia);
	
>