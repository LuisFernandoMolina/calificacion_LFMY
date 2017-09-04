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
      <form class="" action="eliminarU.php" method="POST">
      <?php
      while($result=mysqli_fetch_array($query))
      {
        echo
        "<tr >
          <td name='idUsuaio' id='idUsuario'>".$result['idUsuarios']."</td>
          <td>".$result['Nombre']."</td>
          <td>".$result['clave']."</td>
          <td>".$result['Tipos_usuarios_idTipos_usuarios']."</td> "?>
          <td>
            <a href="" class="btn btn-primary">Modificar</a>
          </td>
          <td><a href="BorrarUsuarios.php" class="btn btn-primary">Eliminar</a></td>
          </form>
      <?php "</tr>"  ;
      }?>
    </thead>
  </table>
</body>
</html>
