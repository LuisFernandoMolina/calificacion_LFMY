<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php
session_start();
require "funciones.php"; ?>
<?php
require 'conexion.php';

  $query="SELECT * FROM materias";
  $query=mysqli_query($conexion,$query);

?>
<html lang="es">

<head>

<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>

</head>
<body>
  <nav class="navbar navbar-inverse">
   <div class="fondo_tec" id="Fondo" align="center">
  				<img src="imagenes/encabezado.png">
  			</div>
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
       <!--<a class="navbar-brand" href="#">Logo</a>-->

      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li class="active"><a href="#">Eventos</a></li>
          <li class="active"><a href="#">Calendario</a></li>
          <?php menu(); ?>
       </ul>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
<h2 style="text-align:center">Administración de Materias</h2>
    </div>
<div class="row">
  <a href="Nueva_Materia.php" class="btn btn-primary">Nueva Materia</a>
  <a href="home.php" class="btn btn-primary">Regresar</a>
  <br>
  </br>


<br>
<div class="row table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th> ID</th>
        <th> Nombre de la Materia</th>
        <th> Horario</th>
        <th> Salon</th>
        <th> Grupo ID </th>
        <th> Calificacion ID</th>
        <th colspan="2"> Option</th>
        <th> </th>
      </tr>

      <?php

      while($result=mysqli_fetch_array($query))
      {
        $idUsuarios = $result ['idMaterias'];
        echo
        "<tr >
          <td name='idMaterias' id='idMaterias'>".$result['idMaterias']."</td>
          <td>".$result['Nombre_materia']."</td>
          <td>".$result['Horario']."</td>
          <td>".$result['Salon']."</td>
          <td>".$result['Grupos_idGrupos']."</td>
          <td>".$result['Calificacion_idCalificacion']."</td> "
      ?>
      <td>

        <form action="eliminarM.php" method="POST">
        <input type="hidden" name="idMaterias" value="<?php echo $result['idMaterias'];?>" />
        <button class="btn btn-primary" type="submit" name="submit_mult" value="Borrar" title="Borrar" >Borrar

        </form>

      </td>

          <td>

          <form action="ModificarMateria.php" method="POST">
          <input type="hidden" name="idMaterias" value="<?php echo $result['idMaterias'];?>"/>
          <button class="btn btn-primary" type="submit" name="submit_mult" value="Modificar" title="Modificar"> Modificar
          </td>


          </form>



      <?php "</tr>"  ;
      }?>

      <div class="modal fade" name="confirm-delete" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
            </div>
            <div class="modal-body">

               ¿Desea eliminar este Usuario de la base de Datos?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <!--<a class="btn btn-danger btn-ok">Delete</a>-->
              <button class="btn btn-danger btn-ok" type="submit" name="submit_mult" value="Borrar" title="Borrar">Delete
            </div>
          </div>
        </div>
      </div>

    </thead>
  </table>
</body>
</html>
