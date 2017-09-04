<?php
  session_start();
  if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){ //revisamos que haya iniciado sesion
require 'conexion.php'; //aqui cargas la coneccion a tu BD
$sql = mysql_query('SELECT * FROM usuarios WHERE usuario="'.$_SESSION['usuario'].'"'); //seleccionamos al usuario que inició sesión
$datos = mysql_fetch_object($sql);
  switch($datos->Tipo_usuarios_idTipos_usuarios){
     case 'administrador':
         //aqui muestras los tab para el administrador
     break;
     case 'normal':
         //aqui muestras los tab para el usuario normal
     break;
  }
}
?>
