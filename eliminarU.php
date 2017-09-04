<?php
require 'conexion.php'
$IdUsuarios=$_POST['idUsuarios'];
echo $idUsuario;
$query = "DELETE * FROM usuarios WHERE idUsuarios='$idUsuarios' LIMIT 1";
    if(mysqli_query($conexion, $query)) {
	     echo '<p>Usuario Borrado Exitosamente.</p>';
     }else{
	      echo '<p>El usuario no se pudo borrar.</p>';
    }
 ?>
