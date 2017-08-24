<?php
	$mysqli= new mysqli('localhost','root','','constitucion');
	if ($mysqli->connect_error){
		die('error en la conexion'.$mysqli->connect_error);
	}
?>
