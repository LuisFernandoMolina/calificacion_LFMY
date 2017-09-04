<?php
require 'conexion.php'
$IdUsuario=$_POST['idUsuario'];
echo $idUsuario;
  $q = "DELETE * FROM usuarios WHERE idUsuarios='$idUsuarios'";
    $rs = mysql_query($q);
    if($rs == false) {
	     echo '<p>Error al eliminar los campos en la tabla.</p>';
     }else{
	      echo '<p>Los datos se han eliminado correctamente.</p>';
    }
 ?>
