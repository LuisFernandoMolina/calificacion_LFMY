<?php
  session_start();
  if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){ //revisamos que haya iniciado sesion
    require 'conexion.php'; //aqui cargas la coneccion a tu BD
    $session =true;
    $sql = mysql_query("SELECT * FROM usuarios WHERE Nombre='.$_SESSION['usuario'].'"); //seleccionamos al usuario que inició sesión
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
