<?php
require('./../../../librery_code/fpdf/fpdf.php');
require('./../../modelo/conexion_bd.php');
date_default_timezone_set('America/Guayaquil');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->Image('./../../../img/dole_logo.png', 15, 7, 25);

    $this->SetXY(60,11);
    $this->SetFont('Arial', 'B', 15);
    $this->Cell(89, 8, utf8_decode('Evaluación de PCMS en Planta Empacadora'), 0, 1);
    
    $this->Ln(2);
}

// Pie de página
function Footer()
{
    $this->SetFont('helvetica', 'B', 8);
    $this->SetY(-15);
    $this->Cell(184, 5, utf8_decode('Página ') . $this->PageNo() . ' / {nb}', 0, 0, 'L');
    $this->Cell(93, 5, date('d/m/Y | g:i:a'), 00, 1, 'R');
    $this->Line(10, 287, 200, 287);
    $this->Cell(0, 5, utf8_decode("ASO. TIERRA FÉRTIL © Todos los derechos reservados."), 0, 0, "C");
}

}
//conexion a la base de datos y obtener la consulta
$conexion = conexionBd();
$id_reporte=$_GET["id_reportes"];
// Datos Generales
$sql = $conexion->query("SELECT * FROM control_calidad WHERE id = $id_reporte");
//$sql2="SELECT id_cont_cal FROM `evaluacion_empacadora` WHERE id_cont_cal=$id_reporte;";
$sql2 = $conexion->query("SELECT DISTINCT eva.num_eva,det.caj_imp,det.embaladores,det.peso_neto,det.par4,det.par6,det.par8,det.impar5,det.impar7,det.defecto,det.tot_def,det.tot_gajos,det.pcmd,eva.pcmd_total,eva.estado_caja FROM evaluacion_empacadora eva INNER JOIN detalle_evaluacion_empacadora det ON (eva.id=det.id_eva_emp) WHERE eva.id_cont_cal=$id_reporte");

$pdf = new PDF('P', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(15);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);
$pdf->SetFont('Arial', '', 12);

$fila = mysqli_fetch_assoc($sql);
$pdf->SetY(35);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(15,5,utf8_decode('Fecha:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(95,5,utf8_decode($fila['fecha']));
$pdf->SetXY(47,35);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(15,5,utf8_decode('Semana:'));
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(65,35);
$pdf->Cell(6,5,utf8_decode($fila['semana']));
$pdf->SetXY(70,35);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(15,5,utf8_decode('Pdo:'));
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(80,35);
$pdf->Cell(5,5,utf8_decode($fila['pdo']));
$pdf->SetXY(87,35);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(13,5,utf8_decode('Vapor:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(40,5,utf8_decode($fila['vapor']));
$pdf->SetXY(135,35);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(15,5,utf8_decode('Tipo Caja:'));
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(155,35);
$pdf->Cell(25,5,utf8_decode($fila['tipo_caj']));
$pdf->SetXY(175,35);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(15,5,utf8_decode('Peso:'));
$pdf->SetXY(187,35);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10,5,utf8_decode($fila['peso']));

$pdf->SetY(45);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(17,5,utf8_decode('Destino:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(40,5,utf8_decode($fila['destino']));
$pdf->SetXY(68,45);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(18,5,utf8_decode('L.Dedos:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(30,5,utf8_decode($fila['ldedos']));
$pdf->SetXY(117,45);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(23,5,utf8_decode('Calibracion:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(20,5,utf8_decode($fila['calibracion']));
$pdf->SetXY(160,45);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(16,5,utf8_decode('Código:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(20,5,utf8_decode($fila['codigo']));

$pdf->setY(55);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(25,5,utf8_decode('Fumigacion:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(35,5,utf8_decode($fila['fumigacion']));
$pdf->setXY(70,55);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(25,5,utf8_decode('Transporte:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(25,5,utf8_decode($fila['transporte']));
$pdf->setXY(120,55);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(15,5,utf8_decode('Finca:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(61,5,utf8_decode($fila['finca']));
$pdf->setY(270);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(25,5,utf8_decode('Observación:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(160,5,utf8_decode($fila['observaciones']));
//5.46

$pdf->SetY(80);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(10,10,utf8_decode('Eva'),1,0,'C'); $pdf->Cell(12,10,utf8_decode('Caja'),1,0,'C');
$pdf->Cell(12,10,utf8_decode('Emba'),1,0,'C');  $pdf->Cell(12,10,utf8_decode('P.Neto'),1,0,'C');

$pdf->SetXY(56,65);
$pdf->Cell(35,10,utf8_decode('% GAJEO'),1,0,'C');

$pdf->SetXY(56,75);
$pdf->Cell(21,10,utf8_decode('Pares'),1,0,'C'); $pdf->Cell(14,10,utf8_decode('Impares'),1,0,'C');

$pdf->SetXY(56,85);
$pdf->Cell(7,5,utf8_decode('4'),1,0,'C'); $pdf->Cell(7,5,utf8_decode('6'),1,0,'C');
$pdf->Cell(7,5,utf8_decode('8'),1,0,'C'); $pdf->Cell(7,5,utf8_decode('5'),1,0,'C');
$pdf->Cell(7,5,utf8_decode('7'),1,0,'C');

$pdf->SetXY(91,80);
$pdf->Cell(35,10,utf8_decode('Defectos Encontrados'),1,0,'C'); $pdf->Cell(18,10,utf8_decode('Tot.Def'),1,0,'C');
$pdf->Cell(18,10,utf8_decode('Tot.Gajos'),1,0,'C');  $pdf->Cell(18,10,utf8_decode('Tot.PCMS'),1,0,'C');
$pdf->Cell(20,10,utf8_decode('Estado Caja'),1,0,'C');

$pdf->SetY(90);
$pdf->SetFont('Arial', '', 9);
while ($fila = mysqli_fetch_assoc($sql2)) {
    // Agregar los datos de la fila a la página
    $pdf->Cell(10,5,utf8_decode($fila['num_eva']), 1, 0, 'C'); $pdf->Cell(12,5,utf8_decode($fila['caj_imp']), 1, 0, 'C');
    $pdf->Cell(12,5,utf8_decode($fila['embaladores']), 1, 0, 'C');$pdf->Cell(12,5,utf8_decode($fila['peso_neto']), 1, 0, 'C');
    $pdf->Cell(7,5,utf8_decode($fila['par4']), 1, 0, 'C');$pdf->Cell(7,5,utf8_decode($fila['par6']), 1, 0, 'C');
    $pdf->Cell(7,5,utf8_decode($fila['par8']), 1, 0, 'C');$pdf->Cell(7,5,utf8_decode($fila['impar5']), 1, 0, 'C');   
    $pdf->Cell(7,5,utf8_decode($fila['impar7']), 1, 0, 'C');$pdf->Cell(35,5,utf8_decode($fila['defecto']), 1, 0, 'C');
    $pdf->Cell(18,5,utf8_decode($fila['tot_def']), 1, 0, 'C');$pdf->Cell(18,5,utf8_decode($fila['tot_gajos']), 1, 0, 'C');
    $pdf->Cell(18,5,utf8_decode($fila['pcmd_total']), 1, 0, 'C');$pdf->Cell(20,5,utf8_decode($fila['estado_caja']), 1, 1, 'C');  
 }

$pdf->Output();
?>