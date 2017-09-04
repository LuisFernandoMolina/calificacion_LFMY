<?php
include 'plantilla.php';
require 'conexion.php';
//consulta que se quiere mostrar
$query= " SELECT materias.Nombre_materia,usuarios.Nombre,grupos.Clave_grupo,grupos.Horario,grupos.Salon
 FROM materias,usuarios,tipos_usuarios,grupos,usuario_grupo
 WHERE materias.idMaterias=tipos_usuarios.idTipos_Usuarios
 AND tipos_usuarios.idTipos_Usuarios=grupos.idGrupos
 AND grupos.idGrupos=usuarios.idUsuarios
 AND tipos_usuarios.idTipos_Usuarios=1
 AND tipos_usuarios.idTipos_Usuarios=usuario_grupo.Grupos_idGrupos ";
$resultado=$mysqli->query($query);
$pdf= new PDF();
//$pdf->AliasPages();
$pdf->AddPage();
$pdf->SetFillColor(232,232,323);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,6,'Materia',1,0,'C',1);
$pdf->Cell(50,6,'Profesor',1,0,'C',1);
$pdf->Cell(20,6,'Grupo',1,0,'C',1);
$pdf->Cell(30,6,'Horario',1,0,'C',1);
$pdf->Cell(30,6,'Salon',1,1,'C',1);
while($row =$resultado->fetch_assoc() )
{
  $pdf->Cell(50,6,$row['Nombre_materia'],1,0,'C',1);
  $pdf->Cell(50,6,$row['Nombre'],1,0,'C',1);
  $pdf->Cell(20,6,$row['Clave_grupo'],1,0,'C',1);
  $pdf->Cell(30,6,$row['Horario'],1,0,'C',1);
  $pdf->Cell(30,6,$row['Salon'],1,1,'C',1);

}
$pdf->OutPut();
