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

    $this->SetXY(147,18);
    $this->SetFont('Arial', 'B', 13);
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
// Consultas para Largo Dedo
$sql_ld1= $conexion->query("SELECT * FROM largo_dedo WHERE id_eva=$id_reporte");
$sql_ld2= $conexion->query("SELECT * FROM largo_dedo_op WHERE id_eva=$id_reporte");
// Consultas para Seleccion Empaque
$sql_se= $conexion->query("SELECT * FROM seleccion_empaque WHERE id_eva=$id_reporte");
$sql_se_d= $conexion->query("SELECT * FROM datos_se WHERE id_eva=$id_reporte");
//otros
$sql_obse= $conexion->query("SELECT observacion FROM datos_se WHERE id_eva=$id_reporte");
$sql_insp=$conexion->query("SELECT CONCAT_WS(' ',nombre_i,apellido_i) as insp FROM evaluaciones WHERE id=$id_reporte");

$pdf = new PDF('P', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(15);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);
$pdf->SetFont('Arial', '', 12);

// DETALLES GENERALES
$pdf->Rect(10, 33,190, 20, 'D'); // Crear un rectángulo con bordes en la posición (10,35) con una anchura de 190 y una altura de 30.9 unidades
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

// Datos de Seleccion Empaque
$pdf->SetY(55);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15,10,utf8_decode('P. Neto'),1,0,'C'); $pdf->Cell(15,10,utf8_decode('Cluster'),1,0,'C');
$pdf->Cell(10,10,utf8_decode('PH'),1,0,'C');  $pdf->Cell(90,5,utf8_decode('SELECCIÓN'),1,0,'C');
$pdf->Cell(40,5,utf8_decode('EMPAQUE'),1,0,'C'); $pdf->Cell(20,10,utf8_decode('TOTAL DEF'),1,0,'C');

$pdf->SetXY(50,60);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(6,5,utf8_decode('BR'),1,0,'C'); $pdf->Cell(6,5,utf8_decode('CC'),1,0,'C');
$pdf->Cell(6,5,utf8_decode('CT'),1,0,'C');  $pdf->Cell(6,5,utf8_decode('LF'),1,0,'C');
$pdf->Cell(6,5,utf8_decode('NI'),1,0,'C'); $pdf->Cell(6,5,utf8_decode('NS'),1,0,'C');
$pdf->Cell(6,5,utf8_decode('PS'),1,0,'C'); $pdf->Cell(6,5,utf8_decode('SK'),1,0,'C');
$pdf->Cell(6,5,utf8_decode('SR'),1,0,'C'); $pdf->Cell(6,5,utf8_decode('TC'),1,0,'C');
$pdf->Cell(6,5,utf8_decode('TF'),1,0,'C'); $pdf->Cell(6,5,utf8_decode('WI'),1,0,'C');
$pdf->Cell(6,5,utf8_decode('YB'),1,0,'C'); $pdf->Cell(6,5,utf8_decode('SC'),1,0,'C');
$pdf->Cell(6,5,utf8_decode('DP'),1,0,'C'); $pdf->Cell(10,5,utf8_decode('BR'),1,0,'C');
$pdf->Cell(10,5,utf8_decode('SR'),1,0,'C'); $pdf->Cell(10,5,utf8_decode('SRF'),1,0,'C');
$pdf->Cell(10,5,utf8_decode('NI'),1,0,'C');

$pdf->SetY(65);
$pdf->SetFont('Arial', '', 9);
while ($fila = mysqli_fetch_assoc($sql_se)) {
    // Agregar los datos de la fila a la página
    $pdf->Cell(15,5,utf8_decode($fila['peso_neto_caja']), 1, 0, 'C'); $pdf->Cell(15,5,utf8_decode($fila['cluster_caja']), 1, 0, 'C');
    $pdf->Cell(10,5,utf8_decode($fila['ph']), 1, 0, 'C');$pdf->Cell(6,5,utf8_decode($fila['sel_br']), 1, 0, 'C');
    $pdf->Cell(6,5,utf8_decode($fila['sel_cc']), 1, 0, 'C');$pdf->Cell(6,5,utf8_decode($fila['sel_ct']), 1, 0, 'C');
    $pdf->Cell(6,5,utf8_decode($fila['sel_lf']), 1, 0, 'C');$pdf->Cell(6,5,utf8_decode($fila['sel_ni']), 1, 0, 'C');   
    $pdf->Cell(6,5,utf8_decode($fila['sel_ns']), 1, 0, 'C');$pdf->Cell(6,5,utf8_decode($fila['sel_ps']), 1, 0, 'C');
    $pdf->Cell(6,5,utf8_decode($fila['sel_sk']), 1, 0, 'C');$pdf->Cell(6,5,utf8_decode($fila['sel_sr']), 1, 0, 'C');
    $pdf->Cell(6,5,utf8_decode($fila['sel_tc']), 1, 0, 'C');$pdf->Cell(6,5,utf8_decode($fila['sel_tf']), 1, 0, 'C');
    $pdf->Cell(6,5,utf8_decode($fila['peso_neto_caja']), 1, 0, 'C');$pdf->Cell(6,5,utf8_decode($fila['sel_yb']), 1, 0, 'C');
    $pdf->Cell(6,5,utf8_decode($fila['sel_sc']), 1, 0, 'C');$pdf->Cell(6,5,utf8_decode($fila['sel_dp']), 1, 0, 'C');
    $pdf->Cell(10,5,utf8_decode($fila['emp_br']), 1, 0, 'C');$pdf->Cell(10,5,utf8_decode($fila['emp_sr']), 1, 0, 'C');
    $pdf->Cell(10,5,utf8_decode($fila['emp_srf']), 1, 0, 'C');$pdf->Cell(10,5,utf8_decode($fila['emp_dp']), 1, 0, 'C');
    $pdf->Cell(20,5,utf8_decode($fila['tot_fila']), 1, 1, 'C');
}

$fila = mysqli_fetch_assoc($sql_se_d);
$pdf->SetY(80);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15,5,utf8_decode("Total"),1,0,'C');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(15,5,utf8_decode($fila['total_cluster']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['total_ph']),1,0,'C');
$pdf->SetXY(180,80);
$pdf->Cell(20,5,utf8_decode($fila['total_defectos']),1,0,'C');
$pdf->SetY(85);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15,5,utf8_decode("%"),1,0,'C');
$pdf->SetFont('Arial', '', 9);
$pdf->SetXY(180,85);
$pdf->Cell(20,5,utf8_decode($fila['promedio_tot']),1,0,'C');
// Datos de Grado Calibre
$pdf->SetY(90);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190,5,'GRADO CALIBRE', 0, 0, 'C');

$pdf->SetY(95);
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
$pdf->Cell(10,5,utf8_decode('AVG'),1,0,'C');

$fila = mysqli_fetch_assoc($sql_gc1);
$pdf->SetY(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10,5,utf8_decode($fila['d36']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d37']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d38']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d39']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d40']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d41']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d42']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d43']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d44']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d45']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d46']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d47']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d48']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d49']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d50']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['d51']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($fila['d52']),1,0,'C'); $pdf->Cell(10,5,utf8_decode($fila['total_gc']),1,0,'C'); $pdf->Cell(10,5,utf8_decode('XX'),1,0,'C');


$fila = mysqli_fetch_assoc($sql_gc2);
$pdf->SetY(105);
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

// Datos de Largo dedo
$pdf->SetY(110);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190,5,'LARGO DEDO', 0, 0, 'C');

$pdf->SetY(115);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(27.33,5,utf8_decode('6'),1,0,'C'); 
$pdf->Cell(27.33,5,utf8_decode('7'),1,0,'C');  
$pdf->Cell(27.33,5,utf8_decode('8'),1,0,'C');
$pdf->Cell(27.33,5,utf8_decode('9'),1,0,'C'); 
$pdf->Cell(27.33,5,utf8_decode('10'),1,0,'C'); 
$pdf->Cell(27.33,5,utf8_decode('11'),1,0,'C'); 
$pdf->Cell(13,10,utf8_decode('Total'),1,0,'C'); 
$pdf->Cell(13,10,utf8_decode('AVG'),1,0,'C');

$pdf->SetY(120);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(5.46,5,utf8_decode('0'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('2'),1,0,'C');  
$pdf->Cell(5.46,5,utf8_decode('4'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('6'),1,0,'C'); 
$pdf->Cell(5.46,5,utf8_decode('8'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('0'),1,0,'C'); 
$pdf->Cell(5.46,5,utf8_decode('2'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('4'),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode('6'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('8'),1,0,'C'); 
$pdf->Cell(5.46,5,utf8_decode('0'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('2'),1,0,'C');  
$pdf->Cell(5.46,5,utf8_decode('4'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('6'),1,0,'C'); 
$pdf->Cell(5.46,5,utf8_decode('8'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('0'),1,0,'C'); 
$pdf->Cell(5.46,5,utf8_decode('2'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('4'),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode('6'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('8'),1,0,'C'); 
$pdf->Cell(5.46,5,utf8_decode('0'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('2'),1,0,'C');  
$pdf->Cell(5.46,5,utf8_decode('4'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('6'),1,0,'C'); 
$pdf->Cell(5.46,5,utf8_decode('8'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('0'),1,0,'C'); 
$pdf->Cell(5.46,5,utf8_decode('2'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('4'),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode('6'),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode('8'),1,0,'C'); 

$fila = mysqli_fetch_assoc($sql_ld1);
$pdf->SetY(125);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(5.46,5,utf8_decode($fila['ld1']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld2']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld3']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld4']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld5']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld6']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld7']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld8']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld9']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld10']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld11']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld12']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld13']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld14']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld15']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld16']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld17']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld18']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld19']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld20']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld21']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld22']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld23']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld24']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld25']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld26']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld27']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld28']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila['ld29']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila['ld30']),1,0,'C');
$pdf->Cell(13,5,utf8_decode($fila['total_largo_dedo']),1,0,'C'); $pdf->Cell(13,5,utf8_decode('XX'),1,0,'C'); 

$fila2 = mysqli_fetch_assoc($sql_ld2);
$pdf->SetY(130);
$pdf->SetFont('Times', '', 9);
$pdf->Cell(5.46,5,utf8_decode($fila2['ld1']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld2']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld3']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld4']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld5']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld6']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld7']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld8']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld9']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld10']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld11']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld12']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld13']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld14']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld15']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld16']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld17']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld18']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld19']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld20']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld21']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld22']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld23']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld24']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld25']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld26']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld27']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld28']),1,0,'C');
$pdf->Cell(5.46,5,utf8_decode($fila2['ld29']),1,0,'C'); $pdf->Cell(5.46,5,utf8_decode($fila2['ld30']),1,0,'C');
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(13,5,utf8_decode($fila2['total_largo_dedo_op']),1,0,'C'); $pdf->Cell(13,5,utf8_decode($fila2['promedio']),1,0,'C'); 
// Fin de Datos de Largo Dedo
// Datos de Asepcias
$pdf->SetY(135);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190,5,'ASEPCIAS EN PLANTA EMPACADORA', 0, 0, 'C');

$pdf->SetY(140);
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

$pdf->SetXY(106,140);
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
$pdf->SetY(202);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190,5,'DEFECTOS DE FRUTA', 1, 0, 'C');
$pdf->SetY(208);
$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(31.66,5,utf8_decode('AB  Pulpa Blanda/crema'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('CT Corte Cuchillo'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('MF Dedos Mutilados'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('SC Rasguño'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('TF Exceso de Cuñas'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('UD Decoloracion interior'),0,0,'L'); 
$pdf->Ln();
$pdf->Cell(31.66,5,utf8_decode('BM Colaspis'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('FF Dedos mellizos'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('NI Cuello roto'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('SD Escaldadura'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('TH trips'),0,0,'L'); 
$pdf->Ln();
$pdf->Cell(31.66,5,utf8_decode('BR Daño de Pulpa'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('FL Flores'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('NS Exceso Grado'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('SK Speckling'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('TS Dedo corto'),0,0,'L'); 
$pdf->Ln();
$pdf->Cell(31.66,5,utf8_decode('CC Cicatriz crecimiento'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('LF Cicatriz de hoja'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('OG Sobre grado'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('SM Fugamina'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('YP Punta Amarilla'),0,0,'L'); 
$pdf->Ln();
$pdf->Cell(31.66,5,utf8_decode('CH Chimera'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('LG Latex gelatinoso'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('PD Punto jhonson'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('SR Stropeo'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('UG Bajo grado'),0,0,'L'); 
$pdf->Ln();
$pdf->Cell(31.66,5,utf8_decode('CI Daño quimico'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('LS Latex seco'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('PS Daño de punta'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('SRF Quema cartón'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('WI Cochinilla'),0,0,'L'); 
$pdf->Ln();
$pdf->Cell(31.66,5,utf8_decode('CS Contra gusano'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('ML Mal formado'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('RR Mancha roja'),0,0,'L'); $pdf->Cell(31.66,5,utf8_decode('TC Moquillo'),0,0,'L'); 
$pdf->Cell(31.66,5,utf8_decode('WP Pedunculo marchito'),0,0,'L'); 

$fila = mysqli_fetch_assoc($sql_obse);
$pdf->SetY(250);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(25,5,utf8_decode('Observaciones:'));
$pdf->SetXY(40,250);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(160,5,utf8_decode($fila['observacion']),0,0,'L');

$fila = mysqli_fetch_assoc($sql_insp);
$pdf->SetY(265);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(25,5,utf8_decode('Evaluador: '));
$pdf->SetXY(35,265);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(50,5,utf8_decode($fila['insp']),0,0,'L');
$pdf->Cell(52.5,5,utf8_decode('________________________'),0,0,'C');
$pdf->Cell(60,5,utf8_decode('________________________'),0,0,'C');
$pdf->SetXY(85,270);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(52.5,5,utf8_decode('Firma Evaluador'),0,0,'C');
$pdf->Cell(60,5,utf8_decode('Firma Productor/Representante'),0,0,'C');

$pdf->Output();
?>