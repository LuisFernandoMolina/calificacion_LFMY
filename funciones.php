
<?php
//Funcion que muestra las opciones de los id de las calificaciones
function showidcalifi($e){
  require 'conexion.php';
  $sh="SELECT * FROM calificacion WHERE idCalificacion='$e'";
  $showd=mysqli_query($conexion,$sh);
  while ($showre=mysqli_fetch_array($showd)) {
    $idc=$showre['idCalificacion'];
    $valorc=$showre['Valor'];
    echo "<option value='$idc' selected>$idc</option >";
  }
  $s="SELECT * FROM calificacion";
  $sho=mysqli_query($conexion,$s);
  while ($si=mysqli_fetch_array($sho)) {
    $ids=$si['idCalificacion'];
    $valors=$si['Valor'];
    echo "<option value='$ids'>$ids</option >";
  }
  unset($sh);
  unset($showd);
  unset($idc);
  unset($valorc);
  mysqli_close($conexion);
}

//Funcion que muestra las opciones de la clave del grupo
function showidgrupo($entra){
  require 'conexion.php';
  $showidgr="SELECT * FROM grupos WHERE idGrupos='$entra'";
  $showdescri=mysqli_query($conexion,$showidgr);
  while ($showresultad=mysqli_fetch_array($showdescri)) {
    $showides=$showresultad['Clave_grupo'];
    $idt=$resultad['idGrupos'];
    echo "<option value='$entra'selected>$showides</option >";
  }
  unset($showidgr);
  unset($showdescri);
  unset($showresultad);
  unset($idt);
  unset($entra);
  mysqli_close($conexion);
}


//Funcion que muestra la descripcion de un tipo de usuario en especial
function showtipo($entra){
  require 'conexion.php';
  $showtipo="SELECT * FROM tipos_usuarios WHERE idTipos_usuarios='$entra'";
  $showdescri=mysqli_query($conexion,$showtipo);
  while ($showresultad=mysqli_fetch_array($showdescri)) {
    $showides=$showresultad['Tipo'];
    echo "<td>$showides</td>";
  }
  unset($showidt);
  unset($showtipo);
  unset($showdescri);
  unset($entra);
  mysqli_close($conexion);
}
//Funcion que muestra el valor por default de un tipo de usuario
function tipou($entrada){
  require 'conexion.php';
  $tipo="SELECT * FROM tipos_usuarios WHERE idTipos_usuarios='$entrada'";
  $descri=mysqli_query($conexion,$tipo);
  while ($resultad=mysqli_fetch_array($descri)) {
    $idt=$resultad['idTipos_usuarios'];
    $ides=$resultad['Tipo'];
    echo "<option value='$idt' selected>$ides</option >";
  }
  unset($idt);
  unset($tipo);
  unset($descri);
  mysqli_close($conexion);
}
//Funcion que muestra los tipos de grupos dependiendo el id_Grupo
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
//Funcion que muestra el id de la calificacion existentes
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

//Funcion que reliza los menus interactivos

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
      echo "<li><a href='\constitucion\calificacion_LFMY\DB_Materias.php' >Materias</a></li>";
      echo "<li><a href='\constitucion\calificacion_LFMY\DB_Usuarios.php' >Usuarios</a>";
      echo"<li class='dropdown'>";
      echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Reportes <span class='caret'></span></a>";
      echo"<ul class='dropdown-menu'>";
          echo"<li><a href='\constitucion\calificacion_LFMY\GenerarPDF.php' target='_blank'>Materias</a></li>";
          echo"<li><a href='\constitucion\calificacion_LFMY\Reporte_Profesores.php' target='_blank' >Profesores</a></li>";
        echo"</ul>";
  echo"</li>";

      }


      elseif($_SESSION['tipo_usuario']==2){
              echo "<li><a>Docente</a></li>";
        echo "<li><a href='\constitucion\calificacion_LFMY\DB_Materias.php'>Calificaciones</a></li>";
        echo"<li class='dropdown'>";
        echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Reportes <span class='caret'></span></a>";
        echo"<ul class='dropdown-menu'>";
            echo"<li><a href='\constitucion\calificacion_LFMY\Reporte_grupos.php' target='_blank' >Grupos</a></li>";
            echo"<li><a href='\constitucion\calificacion_LFMY\GenerarPDF.php' target='_blank' >Materias</a></li>";
            echo"<li><a href='\constitucion\calificacion_LFMY\Reporte_Alumnos.php' target='_blank' >Alumnos</a></li>";
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
            echo "<li><a href='\constitucion\calificacion_LFMY\DB_Grupos.php'>Grupos</a>";
            echo"<li class='dropdown'>";
            echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Reportes <span class='caret'></span></a>";
            echo"<ul class='dropdown-menu'>";
                echo"<li><a href='Reporte_Alumnos.php' target='_blank' >Alumnos</a></li>";
                echo"<li><a href='Reporte_Profesores.php' target='_blank' >Docentes</a></li>";
                echo"<li><a href='GenerarPDF.php' target='_blank' >Materias</a></li>";
              echo"</ul>";
        echo"</li>";

            }
            elseif($_SESSION['tipo_usuario']==100){
                    echo "<li><a>Administrador</a></li>";
              echo "<li><a href='DB_Materias.php'>Materias</a></li>";
              echo "<li><a href='DB_Usuarios.php'>Usuarios</a>";
              echo "<li><a href='\constitucion\calificacion_LFMY\DB_Grupos.php'>Grupos</a>";
              echo"<li class='dropdown'>";
              echo"<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Base de datos <span class='caret'></span></a>";
              echo"<ul class='dropdown-menu'>";
                  echo"<li><a href='CrearExcel.php' target='_blank' >Excel</a></li>";
                echo"</ul>";
          echo"</li>";

              }
}
function salir()
{
  session_destroy();
}
