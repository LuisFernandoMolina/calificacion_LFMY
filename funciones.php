
<?php

function grupos(){
  require 'conexion.php';
  $sql="SELECT * FROM grupos";
  $idgrupo=mysqli_query($conexion,$sql);
  while ($resultado=mysqli_fetch_array($idgrupo)) {
    $grupo=$resultado['Clave_grupo'];
    $id=$resultado['idGrupos'];
    echo "<option value='$id'>$grupo</option>";
  }
  unset($id);
  unset($resultado);
  unset($sql);
  mysqli_close($conexion);
};

function calificacion(){
  include 'conexion.php';
  $rql="SELECT * FROM calificacion";
  $calif=mysqli_query($conexion,$rql);
  while ($res=mysqli_fetch_array($calif)) {
    $id=$res['idCalificacion'];
    echo "<option value='$id'>$id</option>";
  }
  unset($calif);
  unset($res);
  unset($rql);
  mysqli_close($conexion);
}



function menu(){
  if(!$_SESSION['usuario']){
   echo "Debes <a href='index.html'> loguearte</a>";
  }

  elseif($_SESSION['tipo_usuario']==0 || $_SESSION['tipo_usuario']==5){
          echo "<li><a>No tienes Privilegos Consulta al Administrador, Gracias</a></li>";


    }


    elseif($_SESSION['tipo_usuario']==1){
            echo "<li><a>Director</a></li>";
      echo "<li><a href=''>Departamentos</a></li>";
      echo"<li class='dropdown'>";
      echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Reportes <span class='caret'></span></a>";
      echo"<ul class='dropdown-menu'>";
          echo"<li><a href='GenerarPDF.php'>Materias</a></li>";
          echo"<li><a href='Reporte_Profesores.php'>Profesores</a></li>";
        echo"</ul>";
  echo"</li>";

      }


      elseif($_SESSION['tipo_usuario']==2){
              echo "<li><a>Docente</a></li>";
        echo "<li><a href='DB_Materias.php'>Calificaciones</a></li>";
        echo"<li class='dropdown'>";
        echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Reportes <span class='caret'></span></a>";
        echo"<ul class='dropdown-menu'>";
            echo"<li><a href='Reporte_grupos.php'>Grupos</a></li>";
            echo"<li><a href='GenerarPDF.php'>Materias</a></li>";
            echo"<li><a href='Reporte_Alumnos.php'>Alumnos</a></li>";
          echo"</ul>";
          echo"</li>";
    }

        elseif($_SESSION['tipo_usuario']==3){
                echo "<li><a>Estudiante</a></li>";
          echo "<li><a href=''>Becas</a></li>";
          echo "<li><a href=''>Concursos</a></li>";
          echo"<li class='dropdown'>";
          echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Reportes <span class='caret'></span></a>";
          echo"<ul class='dropdown-menu'>";
              echo"<li><a href='Calificaciones.php'>calificaciones</a></li>";
            echo"</ul>";
      echo"</li>";

          }
          elseif($_SESSION['tipo_usuario']==4){
                  echo "<li><a>Coordinador</a></li>";
            echo "<li><a href='DB_Materias.php'>Materias</a></li>";
            echo "<li><a href='DB_Usuarios.php'>Grupos</a>";
            echo"<li class='dropdown'>";
            echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Reportes <span class='caret'></span></a>";
            echo"<ul class='dropdown-menu'>";
                echo"<li><a href='Reporte_Alumnos.php'>Alumnos</a></li>";
                echo"<li><a href='Reporte_Profesores.php'>Docentes</a></li>";
                echo"<li><a href='GenerarPDF.php'>Materias</a></li>";
              echo"</ul>";
        echo"</li>";

            }
            elseif($_SESSION['tipo_usuario']==100){
                    echo "<li><a>Administrador</a></li>";
              echo "<li><a href='DB_Materias.php'>Materias</a></li>";
              echo "<li><a href='DB_Usuarios.php'>Usuarios</a>";
              echo "<li><a href='DB_Usuarios.php'>Grupos</a>";
          echo"</li>";

              }




}
function salir()
{
  session_destroy();


}
