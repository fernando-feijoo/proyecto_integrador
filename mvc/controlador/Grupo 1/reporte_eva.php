 <?php
require('./../../../librery_code/fpdf/fpdf.php');
require('./../../modelo/conexion_bd.php');
date_default_timezone_set('America/Guayaquil');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->Image('./../../../img/logo-empresa-login.png', 15, 7, 25);

    $this->SetY(14);
    $this->SetX(40);
    $this->SetFont('Arial', 'B', 12);
    $this->Cell(89, 8, utf8_decode('ASO. TIERRA FÉRTIL'), 0, 1);

    $this->SetY(18);
    $this->SetX(40);
    $this->SetFont('Arial', '', 8);
    $this->Cell(40, 8, utf8_decode('BANANO ORGÁNICO'));

    $this->SetY(15);
    $this->SetX(200);
    $this->SetFont('Arial', 'B', 15);
    $this->Cell(89, 8, utf8_decode('DETALLES DE EVALUACIÓN'), 0, 1);
    
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

//AQUI VA EL METODO PARA ADAPTAR LAS CELDAS (AUN NO LA VOY A AGREGAR)
}
//conexion a la base de datos y obtener la consulta
$conexion = conexionBd();
$id_reporte=$_GET["id_reportes"];
$sql = $conexion->query("SELECT * FROM evaluaciones WHERE id = $id_reporte");
//$data = mysqli_fetch_all($sql);

$pdf = new PDF('L', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(15);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);

$pdf->SetFont('Arial', '', 12);

//AQUI EMPEZAMOS A LLENAR DETALLES GENERALES

$fila = mysqli_fetch_assoc($sql);

$pdf->Cell(40,15,'ID:', 0, 0, 'L');
$pdf->Cell(40,15,$fila['id'], 0, 1, 'L');
$pdf->Cell(40,10,'Cod_eva:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['cod_eva'], 0, 1, 'L');
$pdf->Cell(40,10,'Semana:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['semana'], 0, 1, 'L');
$pdf->Cell(40,10,'Fecha_eva:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['fecha_eva'], 0, 1, 'L');
$pdf->Cell(40,10,'Hora_eva:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['hora_eva'], 0, 1, 'L');
$pdf->Cell(40,10,'Vapor:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['vapor'], 0, 1, 'L');
$pdf->Cell(40,10,'Tipo de Caja:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['tipo_caja'], 0, 1, 'L');
$pdf->Cell(40,10,'Placa:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['placa_vehiculo'], 0, 1, 'L');
$pdf->Cell(40,10,'Cod_Productor:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['cod_prod'], 0, 1, 'L');
$pdf->Cell(40,10,'Nombre_Prod:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['nombre_p'], 0, 1, 'L');
$pdf->Cell(40,10,'Apellido_Prod:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['apellido_p'], 0, 1, 'L');
$pdf->Cell(40,10,'Finca:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['finca'], 0, 1, 'L');
$pdf->Cell(40,10,'Nombre_Insp:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['nombre_i'], 0, 1, 'L');
$pdf->Cell(40,10,'Apellido_Insp:', 0, 0, 'L');
$pdf->Cell(40,10,$fila['apellido_i'], 0, 1, 'L');




//FIN DE DETALLES GENERALES
$pdf->Output();
?>