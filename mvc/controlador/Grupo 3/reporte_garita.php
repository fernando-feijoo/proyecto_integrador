<?php
require('./../../../librery_code/fpdf/fpdf.php');
date_default_timezone_set('America/Guayaquil');
class PDF extends FPDF
{
  function Header()
  {
    $this->Image('./../../../img/logo-empresa-login.png', 15, 7, 25);

    $this->SetY(14);
    $this->SetX(40);
    $this->SetFont('Arial', 'B', 12);

    $this->SetTextColor(30, 10, 32);
    $this->Cell(89, 8, utf8_decode('ASO. TIERRA FÉRTIL'), 0, 1);
    $this->SetY(18);
    $this->SetX(40);
    $this->SetFont('Arial', '', 8);
    $this->Cell(40, 8, utf8_decode('BANANO ORGÁNICO'));

    $this->SetY(38);
    $this->SetX(105);
    $this->SetFont('Arial', 'B', 15);
    $this->Cell(89, 8, utf8_decode('REPORTE DATOS DE LLEGADA'), 0, 1);

    $this->Ln(2);

    $this->SetX(10);
    $this->SetFillColor(209, 224, 224);
    $this->SetDrawColor(255, 255, 255);

    $this->SetFont('Arial', 'B', 9);
    $this->Cell(10, 10, utf8_decode('ID°'), 1, 0, 'C', 1);
    $this->Cell(40, 10, utf8_decode('FECHA INSPECCIÓN'), 1, 0, 'C', 1);
    $this->Cell(20, 10, utf8_decode('SEMANA'), 1, 0, 'C', 1);
    $this->Cell(25, 10, utf8_decode('H. LLEGADA'), 1, 0, 'C', 1);
    $this->Cell(30, 10, utf8_decode('CONTENEDOR'), 1, 0, 'C', 1);
    $this->Cell(45, 10, utf8_decode('CHOFER'), 1, 0, 'C', 1);
    $this->Cell(45, 10, utf8_decode('ACOPIO'), 1, 0, 'C', 1);
    $this->Cell(25, 10, utf8_decode('TP CAJA'), 1, 0, 'C', 1);
    $this->Cell(35, 10, utf8_decode('TP CONTENEDOR'), 1, 1, 'C', 1);
  }

  function Footer()
  {
    $this->SetFont('helvetica', 'B', 8);
    $this->SetY(-15);
    $this->Cell(184, 5, utf8_decode('Página ') . $this->PageNo() . ' / {nb}', 0, 0, 'L');
    $this->Cell(95, 5, date('d/m/Y | g:i:a'), 00, 1, 'R');
    $this->Line(10, 287, 200, 287);
    $this->Cell(0, 5, utf8_decode("ASO. TIERRA FÉRTIL © Todos los derechos reservados."), 0, 0, "C");
  }
}



$pdf = new PDF('L', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(15);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);


$pdf->SetFont('Arial', '', 10);
for ($i = 0; $i < 40; $i++) {
  $pdf->SetX(10);
  $pdf->SetFillColor(255, 255, 255);
  $pdf->SetDrawColor(65, 61, 61);
  $pdf->Cell(12, 8, utf8_decode('1'), 'B', 0, 'C', 1);
  $pdf->Cell(80, 8, utf8_decode('Titan Colosal'), 'B', 0, 'C', 1);
  $pdf->Cell(30, 8, utf8_decode('$20.50'), 'B', 0, 'C', 1);
  $pdf->Cell(30, 8, utf8_decode('4'), 'B', 0, 'C', 1);
  $pdf->Cell(30, 8, utf8_decode('$82.00'), 'B', 1, 'C', 1);
  $pdf->Ln(0.5);
}

$pdf->Output();
