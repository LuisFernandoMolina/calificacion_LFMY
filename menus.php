<?php
  session_start();
  if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){ //revisamos que haya iniciado sesion
    require 'conexion.php'; //aqui cargas la coneccion a tu BD
    $sql = mysql_query('SELECT * FROM usuarios WHERE usuario="'.$_SESSION['usuario'].'"'); //seleccionamos al usuario que inició sesión
    echo $_SESSION['tipo'];
    $datos = mysql_fetch_object($sql);
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
?>
