
<?php
function grupos(){
  require 'conexion.php';
  $sql="SELECT * FROM grupos";
  $idgrupo=mysqli_query($conexion,$sql);
  while ($resultado=mysqli_fetch_array($idgrupo)) {
    $id=$resultado['idGrupos'];
    echo "<option value='$id'>$id</option>";
  }
}
function menu(){
  if(!$_SESSION['usuario']){
   echo "Debes <a href='index.html'> loguearte</a>";
  } else{
    if ($_SESSION['tipo_usuario']==100){
          echo "<li><a>Administrador</a></li>";
    echo "<li><a href='DB_Materias.php'>Materias</a></li>";
    echo "<li><a href='DB_Usuarios.php'>Usuarios</a>";
    echo "<li><a>Grupos</a></li>";
    echo"<li class='dropdown'>";
    echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Reportes <span class='caret'></span></a>";
    echo"<ul class='dropdown-menu'>";
        echo"<li><a href='GenerarPDF.php'>Alumnos</a></li>";
        echo"<li><a href='#'>Grupos</a></li>";
        echo"<li><a href='/constitucion/calificacion_LFMY/Reporte_Materias.php'>Materias</a></li>";
      echo"</ul>";
echo"</li>";

    } else{
      if ($_SESSION['tipo_usuario']==1){
            echo "<li><a>Maestro</a></li>";
      echo "<li><a href='DB_Materias.php'>Materias</a></li>";
      echo"<li class='dropdown'>";
      echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Reportes <span class='caret'></span></a>";
      echo"<ul class='dropdown-menu'>";
          echo"<li><a href='GenerarPDF.php'>Alumnos</a></li>";
          echo"<li><a href='#'>Grupos</a></li>";
          echo"<li><a href='/constitucion/calificacion_LFMY/Reporte_Materias.php'>Materias</a></li>";
        echo"</ul>";
  echo"</li>";

      }
  }
}
}
function salir()
{
  session_destroy();


}
