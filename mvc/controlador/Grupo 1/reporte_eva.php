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

    $this->SetY(18);
    $this->SetX(225);
    $this->SetFont('Arial', 'B', 15);
    $this->Cell(89, 8, utf8_decode('HOJA DE EVALUACIÓN'), 0, 1);
    
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

$sql_asepcias1= $conexion->query("SELECT da.nombre, ase.tipo FROM asepcias ase inner join datos_asepcias da ON da.id=ase.id_datos_asepcias WHERE ase.id_eva=$id_reporte ORDER BY ase.id ASC LIMIT 0,11");
$sql_asepcias2= $conexion->query("SELECT da.nombre, ase.tipo FROM asepcias ase inner join datos_asepcias da ON da.id=ase.id_datos_asepcias WHERE ase.id_eva=$id_reporte ORDER BY ase.id ASC LIMIT 11,22");
//$data = mysqli_fetch_all($sql);

$pdf = new PDF('L', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(15);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);
$pdf->SetFont('Arial', '', 12);

// DETALLES GENERALES

$fila = mysqli_fetch_assoc($sql);
$pdf->SetY(35);
$pdf->Cell(25,5,'Productor:');
$pdf->Cell(30,5,$fila['nombre_p']);
$pdf->Cell(30,5,$fila['apellido_p']);
$pdf->SetXY(130,35);
$pdf->Cell(15,5,'Vapor:');
$pdf->Cell(30,5,$fila['vapor']);
$pdf->SetXY(235,35);
$pdf->Cell(20,5,'Semana:');
$pdf->Cell(20,5,$fila['semana']);
//$pdf->Cell(40,15,'ID:');
//$pdf->Cell(40,15,$fila['id']);
$pdf->SetY(40);
$pdf->Cell(25,5,'Finca:');
$pdf->Cell(75,5,$fila['finca']);
$pdf->SetXY(130,40);
$pdf->Cell(15,5,'Fecha:');
$pdf->Cell(30,5,$fila['fecha_eva']);
$pdf->SetXY(235,40);
$pdf->Cell(20,5,'Código:');
$pdf->Cell(41,5,$fila['cod_eva']);

$pdf->SetY(45);
$pdf->Cell(25,5,'Tipo Caja:');
$pdf->Cell(75,5,$fila['tipo_caja']);
$pdf->SetXY(130,45);
$pdf->Cell(31,5,'Placa Vehiculo:');
$pdf->Cell(30,5,$fila['placa_vehiculo']);
$pdf->SetXY(235,45);
$pdf->Cell(20,5,'Hora Eva:');
$pdf->Cell(20,5,$fila['hora_eva']);
// Fin de Detalles Generales

$pdf->SetY(55);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(277,5,'GRADO CALIBRE', 1, 0, 'C');

$pdf->SetY(65);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(277,5,'LARGO DEDO', 1, 0, 'C');

$pdf->SetY(75);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(277,5,'ASEPCIAS EN PLANTA EMPACADORA', 1, 0, 'C');

// Datos de Asepcias
$pdf->SetY(81);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(105, 5, utf8_decode('PUNTO DE CONTROL'), 1, 0, 'C', 0);
$pdf->Cell(30, 5, utf8_decode('OPCION'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 9);
while ($fila = mysqli_fetch_assoc($sql_asepcias1)) {
    // Agregar los datos de la fila a la página
    $pdf->Cell(105,5,$fila['nombre'], 1, 0, 'C');
    $pdf->Cell(30,5,$fila['tipo'], 1, 1, 'C');
}

$pdf->SetXY(152,81);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(105, 5, utf8_decode('PUNTO DE CONTROL'), 1, 0, 'C', 0);
$pdf->Cell(30, 5, utf8_decode('OPCION'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 9);
while ($fila = mysqli_fetch_assoc($sql_asepcias2)) {
    $pdf->SetX(152);
    // Agregar los datos de la fila a la página
    $pdf->Cell(105,5,$fila['nombre'], 1, 0, 'C');
    $pdf->Cell(30,5,$fila['tipo'], 1, 1, 'C');
}
// Fin de Datos Asepcias
$pdf->Output();
?>