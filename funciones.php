<style>
  /* Remove the navbar's default margin-bottom and rounded borders */
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }

  /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
  .row.content {height: 450px}

  /* Set gray background color and 100% height */
  .sidenav {
    padding-top: 20px;
    background-color: #f1f1f1;
    height: 100%;
  }

  /* Set black background color, white text and some padding */
  footer {
    background-color: #555;
    color: white;
    padding: 15px;
  }

  /* On small screens, set height to 'auto' for sidenav and grid */
  @media screen and (max-width: 767px) {
    .sidenav {
      height: auto;
      padding: 15px;
    }
    .row.content {height:auto;}
  }
</style>

<?php

function menu(){
  if(!$_SESSION['usuario']){
   echo "Debes <a href='index.html'> loguearte</a>";
  } else{
    if ($_SESSION['tipo_usuario']==100){ 
      /*echo "<li>Reportes</li>";
        echo "<ul>";
          echo "<li>Alumnos</li>";
            echo "<li>Materias</li>";
            echo "</ul>";
      echo "<li>Usuarios</li>";*/
    echo "<li> Usuarios </li>";
    echo "<li>Materias</li>";
    echo "<li>Grupos</li>";
    echo "<li> Reportes </li>";

    } else{
        echo "<li>Mis calificaciones</li>";
          echo "<li>Horario</li>";

    }

  }

}
function salir()
{
  session_destroy();


}
