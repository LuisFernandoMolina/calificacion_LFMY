<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
  <a href="Nueva_Materia.php" class="btn btn-primary">Agregar Materias</a>
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
            <td><a href="Modificar_Materias.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="Borrar_DBMaterias.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
      </tbody>
  </table>
</div>
</div>
  <!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar</h4>
					</div>

					<div class="modal-body">
						¿Desea eliminar este registro de la base de Datos?
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>

		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>
</body>
</html>
