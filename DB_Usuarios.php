
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<?php
include 'funciones.php';
session_start();
require 'conexion.php';
  $query="SELECT * FROM usuarios";
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
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class=""><a href="home.php">Home</a></li>
          <li class=""><a href="#">Eventos</a></li>
          <li class=""><a href="#">Calendario</a></li>
          <?php

          menu(); ?>
       </ul>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
        </ul>
      </div>
    </div>
  </nav
<div class="container">
    <div class="row">
<h2 style="text-align:center">Administración de Usuarios</h2>
    </div>
<div class="row">
  <a href="Nuevo_usuario.php" class="btn btn-primary">Nuevo Usuario</a>
  <a href="home.php" class="btn btn-primary">Regresar</a>
  <br>
  </br>


<br>
<div class="row table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th> ID</th>
        <th> Nombre usuario</th>
        <th> Clave </th>
        <th> Tipo de Usuario</th>
        <th colspan="2"> Option</th>
        <th> </th>
      </tr>

      <?php
      while($result=mysqli_fetch_array($query))
      {
        $idUsuarios = $result ['idUsuarios'];
        echo
        "<tr >
          <td name='idUsuario' id='idUsuario'>".$result['idUsuarios']."</td>
          <td>".$result['Nombre']."</td>
          <td>".$result['clave']."</td>";
          showtipo($result['Tipos_usuarios_idTipos_usuarios']);
      ?>
      <td>

        <form action="eliminarU.php" method="POST">
        <input type="hidden" name="idUsuarios" value="<?php echo $result['idUsuarios'];?>" />
        <button class="btn btn-primary" type="submit" name="submit_mult" value="Borrar" title="Borrar" >Borrar

        </form>

      </td>

          <td>

          <form action="ModificarUsuario.php" method="POST">
          <input type="hidden" name="idUsuarios" value="<?php echo $result['idUsuarios'];?>"/>
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
