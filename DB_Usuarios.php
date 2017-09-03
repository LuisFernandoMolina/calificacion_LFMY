<?php
require 'conexion.php';

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
  <br>
  </br>
<div class="row">
  <a href="VerUsuarios.php" class="btn btn-primary"> Ver usuarios Registrados</a>

<br>
<div class="row table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th> </th>
        <th> </th>
        <th> ID</th>
        <th> Nombre usuario</th>
        <th> Clave </th>
        <th> Tipo de Usuario</th>
        <th> </th>
        <th> </th>
      </tr>
    </thead>
  </table>



</body>

</html>


