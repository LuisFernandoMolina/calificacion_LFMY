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
<div class="row">
  <a href="VerUsuarios.php" class="btn btn-primary"> Ver Usuarios Registrados</a>
  <br>
  </br>
<div class="row">
  <a href="BorrarUsuarios.php" class="btn btn-pimary"> Borrar Usuarios Registrados</a>
   <br>
  </br>
<div class="row">
  <a href="ModificarUsuarios.php" class="btn btn-pimary"> Modificar Usuarios Registrados</a>

<br>
<div class="row table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th> ID</th>
        <th> Nombre usuario</th>
        <th> Clave </th>
        <th> Tipo de Usuario</th>
        <th> </th>
      </tr>
      <?php
      while($result=mysqli_fetch_array($query))
      {
        echo
        "<tr >
          <td>".$result['idUsuarios']."</td>
          <td>".$result['Nombre']."</td>
          <td>".$result['clave']."</td>
          <td>".$result['Tipos_usuarios_idTipos_usuarios']."</td>
        </tr>";
      }
     ?>

    </thead>
  </table>
</body>
</html>
