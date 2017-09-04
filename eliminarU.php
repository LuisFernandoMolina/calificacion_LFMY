<?php
require 'conexion.php';
$idUsuarios=$_POST['idUsuarios'];
$query = "DELETE  FROM usuarios WHERE idUsuarios='$idUsuarios' LIMIT 1";
    if(mysqli_query($conexion, $query)) {
	     echo '<p>Usuario Borrado Exitosamente.</p>';
	     //sleep(10);
	     header("location:index.html");
     }else{
	      echo '<p>El usuario no se pudo borrar.</p>';
    }
 ?>
