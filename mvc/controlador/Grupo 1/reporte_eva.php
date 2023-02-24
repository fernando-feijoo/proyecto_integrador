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

    $this->SetXY(140,18);
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
//Consulta para los detalles Generales
$sql = $conexion->query("SELECT concat_ws(' ', eva.nombre_p, eva.apellido_p) as datos,eva.* FROM evaluaciones eva WHERE id = $id_reporte");
//Consulta para asepcias
$sql_asepcias1= $conexion->query("SELECT da.nombre, ase.tipo FROM asepcias ase inner join datos_asepcias da ON da.id=ase.id_datos_asepcias WHERE ase.id_eva=$id_reporte ORDER BY ase.id ASC LIMIT 0,11");
$sql_asepcias2= $conexion->query("SELECT da.nombre, ase.tipo FROM asepcias ase inner join datos_asepcias da ON da.id=ase.id_datos_asepcias WHERE ase.id_eva=$id_reporte ORDER BY ase.id ASC LIMIT 11,22");
//$data = mysqli_fetch_all($sql);
//Consultas para Grado Calibre
$sql_gc1= $conexion->query("SELECT * FROM grado_calibre WHERE id_eva=$id_reporte");
$sql_gc2= $conexion->query("SELECT * FROM grado_calibre_op WHERE id_eva=$id_reporte");


$pdf = new PDF('P', 'mm', 'A4');
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
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(25,5,utf8_decode('Productor:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(95,5,utf8_decode($fila['datos']));
$pdf->SetXY(95,35);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(15,5,utf8_decode('Vapor:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(30,5,utf8_decode($fila['vapor']));
$pdf->SetXY(150,35);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(20,5,utf8_decode('Semana:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(30,5,utf8_decode($fila['semana']));
//$pdf->Cell(40,15,'ID:');
//$pdf->Cell(40,15,$fila['id']);
$pdf->SetY(40);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(25,5,utf8_decode('Finca:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(95,5,utf8_decode($fila['finca']));
$pdf->SetXY(95,40);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(15,5,utf8_decode('Fecha:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(30,5,utf8_decode($fila['fecha_eva']));
$pdf->SetXY(150,40);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(20,5,utf8_decode('Código:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(30,5,utf8_decode($fila['cod_eva']));

$pdf->SetY(45);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(25,5,utf8_decode('Tipo Caja:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(75,5,utf8_decode($fila['tipo_caja']));
$pdf->SetXY(95,45);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(31,5,utf8_decode('Placa Vehiculo:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(30,5,utf8_decode($fila['placa_vehiculo']));
$pdf->SetXY(150,45);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(20,5,utf8_decode('Hora Eva:'));
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(30,5,utf8_decode($fila['hora_eva']));
// Fin de Detalles Generales

// Datos de Grado Clibre
$pdf->SetY(55);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190,5,'GRADO CALIBRE', 0, 0, 'C');

$pdf->SetY(60);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10,5,utf8_decode('-36'),1,0,'C'); $pdf->Cell(10,5,utf8_decode('37'),1,0,'C');
$pdf->Cell(10,5,utf8_decode('38'),1,0,'C');  $pdf->Cell(10,5,utf8_decode('39'),1,0,'C');
$pdf->Cell(10,5,utf8_decode('40'),1,0,'C'); $pdf->Cell(10,5,utf8_decode('41'),1,0,'C');
$pdf->Cell(10,5,utf8_decode('42'),1,0,'C'); $pdf->Cell(10,5,utf8_decode('43'),1,0,'C');
$pdf->Cell(10,5,utf8_decode('44'),1,0,'C'); $pdf->Cell(10,5,utf8_decode('45'),1,0,'C');
$pdf->Cell(10,5,utf8_decode('46'),1,0,'C'); $pdf->Cell(10,5,utf8_decode('47'),1,0,'C');
$pdf->Cell(10,5,utf8_decode('48'),1,0,'C'); $pdf->Cell(10,5,utf8_decode('49'),1,0,'C');
$pdf->Cell(10,5,utf8_decode('50'),1,0,'C'); $pdf->Cell(10,5,utf8_decode('51'),1,0,'C');
$pdf->Cell(10,5,utf8_decode('+52'),1,0,'C'); $pdf->Cell(10,5,utf8_decode('Total'),1,0,'C');
$pdf->Cell(10,5,utf8_decode('Pro'),1,0,'C');

$fila = mysqli_fetch_assoc($sql_gc1);
$pdf->SetY(65);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10,5,utf8_decode($fila['d36']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d37']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d38']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d39']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d40']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d41']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d42']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d43']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d44']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d45']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d46']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d47']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d48']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d49']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d50']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d51']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d52']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['total_gc']),1,0,'C');


$fila = mysqli_fetch_assoc($sql_gc2);
$pdf->SetY(70);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10,5,utf8_decode($fila['d36']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d37']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d38']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d39']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d40']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d41']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d42']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d43']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d44']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d45']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d46']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d47']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d48']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d49']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d50']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d51']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d52']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['total_gc_op']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['promedio']),1,0,'C');

// Fin de Datos de Grado Calibre
$pdf->SetY(80);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190,5,'LARGO DEDO', 1, 0, 'C');

// Datos de Asepcias
$pdf->SetY(105);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190,5,'ASEPCIAS EN PLANTA EMPACADORA', 1, 0, 'C');

$pdf->SetY(111);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 5, utf8_decode('PUNTO DE CONTROL'), 1, 0, 'C', 0);
$pdf->Cell(24, 5, utf8_decode('OPCION'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 9);
while ($fila = mysqli_fetch_assoc($sql_asepcias1)) {
    // Agregar los datos de la fila a la página
    $pdf->Cell(70,5,utf8_decode($fila['nombre']), 1, 0, 'L');
    $pdf->Cell(24,5,utf8_decode($fila['tipo']), 1, 1, 'C');
}

$pdf->SetXY(106,111);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(70, 5, utf8_decode('PUNTO DE CONTROL'), 1, 0, 'C', 0);
$pdf->Cell(24, 5, utf8_decode('OPCION'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 9);
while ($fila = mysqli_fetch_assoc($sql_asepcias2)) {
    $pdf->SetX(106);
    // Agregar los datos de la fila a la página
    $pdf->Cell(70,5,utf8_decode($fila['nombre']), 1, 0, 'L');
    $pdf->Cell(24,5,utf8_decode($fila['tipo']), 1, 1, 'C');
}
// Fin de Datos Asepcias

$pdf->Output();
?>