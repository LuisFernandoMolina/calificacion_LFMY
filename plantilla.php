<?php
require 'fpdf/fpdf.php';
/**
 *
 */
class PDF extends FPDF
{

  function Header()
  {
    # Datos de cabecera
    $this->Image ('images/logo.png',10,5,30);
    $this->Image ('images/isc.jpg',140,5,80);
    $this->SetFont('Arial','B',15);

    $this->Cell(170,5,"Tecnologico Nacional de Mexico ",0,0,'C');
    $this->Ln();//salto de linea
    $this->SetFont('Arial','',13);
    $this->Cell(170,5,'Instituto Tecnologico de Queretaro',0,0,'C');
    $this->Ln(40);
  }
  function Footer()
  {
    $this->SetY(-15);
      $this->SetFont('Arial','I',8);
      //$this->Cell(0,10,'pagina '$this->PageNo().'/{nb}',0,0,'C');
  }
  }

 ?>
