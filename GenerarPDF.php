<?php
include 'plantilla.php';
require 'conexion.php';
//consulta que se quiere mostrar
//Anita la huerfanita
$query= " SELECT * FROM materias";
$resultado=$conexion->query($query);
$pdf= new PDF();
//$pdf->AliasPages();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(232,232,323);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(50,6,'Materia',1,0,'C',1);
$pdf->Cell(30,6,'Horario',1,0,'C',1);
$pdf->Cell(30,6,'Salon',1,0,'C',1);
$pdf->Cell(30,6,'Grupo',1,1,'C',1);

while($row =$resultado->fetch_assoc() )
{
  $pdf->SetFont('Arial','',11);
  $pdf->Cell(20,6,$row['idMaterias'],1,0,'C',1);
  $pdf->Cell(50,6,$row['Nombre_materia'],1,0,'C',1);
  $pdf->Cell(30,6,$row['Horario'],1,0,'C',1);
  $pdf->Cell(30,6,$row['Salon'],1,0,'C',1);
  $pdf->Cell(30,6,$row['Grupos_idGrupos'],1,1,'C',1);

}


$pdf->OutPut();
