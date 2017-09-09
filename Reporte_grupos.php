<?php
include 'plantilla.php';
require 'conexion.php';
//consulta que se quiere mostrar
$query= " SELECT * FROM grupos";
$resultado=$conexion->query($query);
$pdf= new PDF();
//$pdf->AliasPages();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(232,232,323);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(30,6,'Grupo',1,1,'C',1);

while($row =$resultado->fetch_assoc() )
{
  $pdf->SetFont('Arial','',11);
  $pdf->Cell(20,6,$row['idGrupos'],1,0,'C',1);
  $pdf->Cell(30,6,$row['Clave_grupo'],1,1,'C',1);

}


$pdf->OutPut();
