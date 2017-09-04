<?php
require 'conexion.php';
$where="";
$sql="SELECT materias.idMaterias,materias.Nombre_materia,usuarios.Nombre,grupos.Clave_grupo,grupos.Horario,grupos.Salon
 FROM materias,usuarios,tipos_usuarios,grupos,usuario_grupo
 WHERE materias.idMaterias=tipos_usuarios.idTipos_Usuarios
 AND tipos_usuarios.idTipos_Usuarios=grupos.idGrupos
 AND grupos.idGrupos=usuarios.idUsuarios
 AND tipos_usuarios.idTipos_Usuarios=1
 AND tipos_usuarios.idTipos_Usuarios=usuario_grupo.Grupos_idGrupos";
$resultado = $conexion->query($sql);
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
  <h2 style="text-align:center">Materias Ingenieria en Sistemas</h2>
    </div>
<div class="row">
  <a href="Nuevo_usuario.php" class="btn btn-primary">Agregar Materias</a>
  <a href="homeadmin.php" class="btn btn-primary">Regresar</a>

<br>
<div class="row table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Materia</th>
        <th>Profesor</th>
          <th>Horario</th>
          <th>Salon</th>

      </tr>
    </thead>
    <tbody>
      <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
        <tr>
          <td> <?php  echo $row['idMaterias']; ?>
          <td> <?php  echo $row['Nombre_materia']; ?>
          <td> <?php  echo $row['Nombre']; ?>
          <td> <?php  echo $row['Horario']; ?>
          <td> <?php  echo $row['Salon']; ?>
            <td> <a href= "modificar.php?idMaterias="<?php  echo $row['idMaterias']; ?>><span class=" glyphicon glyphicon-pencil"></span> </a></td>
            <td> <a href= "modificar.php?idMaterias="<?php  echo $row['idMaterias']; ?>><span class=" glyphicon glyphicon-trash"></span></td>
          </tr>
        <?php } ?>
      </tbody>
  </table>
</body>
</html>
