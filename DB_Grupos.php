<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php
require 'conexion.php';
  $query="SELECT * FROM grupos";
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
  <div class="container">
    <div class="row">
<h2 style="text-align:center">Administración de Grupos</h2>
    </div>
<div class="row">
  <a href="Nuevo_Grupo.php" class="btn btn-primary">Nuevo Grupo</a>
  <a href="home.php" class="btn btn-primary">Regresar</a>
  <br>
  </br>


<br>
<div class="row table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th> ID</th>
        <th> Clave del grupo</th>
        <th colspan="2"> Option</th>
        <th> </th>
      </tr>

      <?php

      while($result=mysqli_fetch_array($query))
      {
        echo
        "<tr >
          <td>".$result['idGrupos']."</td>
          <td>".$result['Clave_grupo']."</td> "
      ?>
      <td>

        <form action="eliminarG.php" method="POST">
        <input type="hidden" name="idGrupos" value="<?php echo $result['idGrupos'];?>" />
        <button class="btn btn-primary" type="submit" name="submit_mult" value="Borrar" title="Borrar" >Borrar

        </form>

      </td>

          <td>

          <form action="ModificarGrupo.php" method="POST">
          <input type="hidden" name="idGrupos" value="<?php echo $result['idGrupos'];?>"/>
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
