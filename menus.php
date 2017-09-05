<?php
  session_start();
  $usuario=$_SESSION['usuario'];
  if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){ //revisamos que haya iniciado sesion
    require 'conexion.php'; //aqui cargas la coneccion a tu BD
    $sql = mysqli_query($conexion,"SELECT Tipos_usuarios_idTipos_usuarios FROM usuarios WHERE Nombre='$usuario'"); //seleccionamos al usuario que inició sesión
    $datos = mysql_fetch_object($sql);
  switch($datos){
     case '100':
         header("location:homeadmin.php");
     break;
     case '0':
      header("location:home.php");

     break;
     case '1':
      header("location:homeadmin.php");

     break;
     default:
     echo "No lo encontro";
     break;
  }
  mysqli_free_result($datos);
	mysqli_close($conexion);
}
else {
  $session=false;
}
?>
