<?php
  session_start();
  if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){ //revisamos que haya iniciado sesion
    require 'conexion.php'; //aqui cargas la coneccion a tu BD
    $session =true;
    $sql = mysql_query("SELECT idUsuarios FROM usuarios WHERE Nombre='Fer'"); //seleccionamos al usuario que inició sesión
    echo $_SESSION['usuario'];
    echo $sql;
    $datos = mysqli_fetch_array($sql,1);
    echo $sql;
  switch($datos->Tipos_usuarios_idTipos_usuarios){
     case '1':
         header("location:home.php");
     break;
     case 'normal':
         //aqui muestras los tab para el usuario normal
     break;
  }
}
else {
  $session=false;
}
?>
