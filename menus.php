<?php
  session_start();
  $usuario=$_SESSION['usuario'];
//  $usuario=($_GET['username']);
  if(isset($usuario) && !empty($usuario)){ //revisamos que haya iniciado sesion
    require 'conexion.php'; //aqui cargas la coneccion a tu BD
    $sql = mysqli_query($conexion,"SELECT Tipos_usuarios_idTipos_usuarios FROM usuarios WHERE Nombre='$usuario'"); //seleccionamos al usuario que inició sesión
    $datos = mysqli_fetch_array($sql);
    echo $usuario;
    echo $datos['Tipos_usuarios_idTipos_usuarios'];
  switch($datos['Tipos_usuarios_idTipos_usuarios']){
     case '100':
         header("location:homeadmin.php");
     break;
     case '0':
      header("location:home.php");
     break;
     case '1':
      header("location:homedirector.php");
     break;
     case '2':
      header("location:homedocente.php");
     break;
     case '3':
      header("location:homeestudiante.php");
     break;
     case '4':
      header("location:homecoordinador.php");
     break;
     default:
     echo "No lo encontro";
     break;
  }
  mysqli_free_result($datos);
	mysqli_close($conexion);
  unset($usuario);
}
else {
  $session=false;
}
?>
