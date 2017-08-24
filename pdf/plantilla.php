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
    $this->Image ('images/logo.png',5,0,20);
    $this->SetFont('Arial','B',15);
    $this->Cell(30);
    $this->Cell(120,10,"Registro de alumnos ",0,0,'C');
    $this->Ln(20);//salto de linea
  }
  function Footer()
  {
    $this->SetY(-15);
      $this->SetFont('Arial','I',8);
      //$this->Cell(0,10,'pagina '$this->PageNo().'/{nb}',0,0,'C');
  }
  }

 ?>
