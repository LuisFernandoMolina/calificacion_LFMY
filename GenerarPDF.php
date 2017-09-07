<?php
include 'plantilla.php';
require 'conexion.php';
//consulta que se quiere mostrar
$query= " SELECT usuarios.idUsuarios,usuarios.Nombre,grupos.Clave_grupo,materias.Nombre_Materia,calificacion.Valor
 FROM usuarios,grupos,materias,calificacion
 WHERE usuarios.idUsuarios=grupos.idGrupos
 AND grupos.idGrupos=materias.idMaterias
 AND materias.idMaterias=calificacion.idCalificacion";
$resultado=$conexion->query($query);
$pdf= new PDF();
//$pdf->AliasPages();
$pdf->AddPage();
$pdf->SetFillColor(232,232,323);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(50,6,'Nombre',1,0,'C',1);
$pdf->Cell(20,6,'Grupo',1,0,'C',1);
$pdf->Cell(30,6,'Materia',1,0,'C',1);
$pdf->Cell(30,6,'calificacion',1,1,'C',1);
while($row =$resultado->fetch_assoc() )
{
  $pdf->Cell(20,6,$row['idUsuarios'],1,0,'C',1);
  $pdf->Cell(50,6,$row['Nombre'],1,0,'C',1);
  $pdf->Cell(20,6,$row['Clave_grupo'],1,0,'C',1);
  $pdf->Cell(30,6,$row['Nombre_Materia'],1,0,'C',1);
  $pdf->Cell(30,6,$row['Valor'],1,1,'C',1);

}
$pdf->OutPut();
