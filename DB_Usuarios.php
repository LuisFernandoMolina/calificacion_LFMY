<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<?php
require 'conexion.php';
  $query="SELECT * FROM usuarios";
  $query=mysqli_query($conexion,$query);

?>
<html lang="es">

<head>

<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>

</head>
<body>
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
          <td>".$result['clave']."</td>
          <td>".$result['Tipos_usuarios_idTipos_usuarios']."</td> "
      ?>
      <td>

        <form action="eliminarU.php" method="POST">
        <input type="hidden" name="idUsuarios" value="<?php echo $result['idUsuarios'];?>" />
        <button class="btn btn-primary" type="submit"  value="Borrar" title="Borrar" >Borrar
        <td><a href="#confirm-delete" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
        </form>

      </td>

          <td>

          <form action="ModificarUsuario2.php" method="POST">
          <input type="hidden" name="" value="<?php echo $result['idUsuarios'];?>"/>
          <button class="btn btn-primary" type="submit" name="submit_mult" valie="Modificar" title="Modificar" data-toggle="modal" data-target="#confirm-delete">
          Modificar
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
