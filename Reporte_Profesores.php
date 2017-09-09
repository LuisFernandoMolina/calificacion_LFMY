<?php
include 'plantilla.php';
require 'conexion.php';
//consulta que se quiere mostrar
$query= " SELECT * FROM usuarios WHERE Tipos_usuarios_idTipos_usuarios=2";
$resultado=$conexion->query($query);
$pdf= new PDF();
//$pdf->AliasPages();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(232,232,323);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(60,6,'Nombre',1,1,'C',1);

while($row =$resultado->fetch_assoc() )
{
  $pdf->SetFont('Arial','',11);
  $pdf->Cell(20,6,$row['idUsuarios'],1,0,'C',1);
  $pdf->Cell(60,6,$row['Nombre'],1,1,'C',1);


}


$pdf->OutPut();
