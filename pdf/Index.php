<?php
include 'plantilla.php';
require 'conexion.php';
//consulta que se quiere mostrar
$query= "select * from usuarios";
$resultado=$mysqli->query($query);
$pdf= new PDF();
//$pdf->AliasPages();
$pdf->AddPage();
$pdf->SetFillColor(232,232,323);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(70,6,'Nombre',1,0,'C',1);
$pdf->Cell(20,6,'Clave',1,1,'C',1);
while($row =$resultado->fetch_assoc() )
{
  $pdf->Cell(20,6,$row['idUsuarios'],1,0,'C',1);
  $pdf->Cell(70,6,$row['Nombre'],1,0,'C',1);
  $pdf->Cell(20,6,$row['clave'],1,1,'C',1);

}
$pdf->OutPut();
