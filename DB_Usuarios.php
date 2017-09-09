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
  <a href="homeadmin.php" class="btn btn-primary">Regresar</a>
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
        <button class="btn btn-primary" type="submit" name="submit_mult" value="Borrar" title="Borrar">Borrar
      </td>

          <td>
         
          <form action="ModificarUsuario2.php" method="POST">
          <input type="hidden" name="idUsuarios" value="<?php echo $result['idUsiarios'];?>"/>
          <button class="btn btn-primary" type="submit" name="submit_mult" valie="Modificar" title="Modificar">
          Modificar
          </td>





          <td><a href="ModificarUsuarios.php?$idUsuarios" class="btn btn-primary">Modificar</a></td>
          </form>
      <?php "</tr>"  ;
      }?>
    </thead>
  </table>
</body>
</html>
