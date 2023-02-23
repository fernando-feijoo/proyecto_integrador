<?php
require('./../../../librery_code/fpdf/fpdf.php');
require('./../../modelo/conexion_bd.php');
date_default_timezone_set('America/Guayaquil');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->Image('./../../../img/logo-empresa-login.png', 15, 7, 23);

    $this->SetY(14);
    $this->SetX(40);
    $this->SetFont('Arial', 'B', 12);
    $this->Cell(89, 8, utf8_decode('ASO. TIERRA FÉRTIL'), 0, 1);

    $this->SetY(18);
    $this->SetX(40);
    $this->SetFont('Arial', '', 8);
    $this->Cell(40, 8, utf8_decode('BANANO ORGÁNICO'));

    $this->SetY(18);
    $this->SetX(105);
    $this->SetFont('Arial', 'B', 15);
    $this->Cell(105, 8, utf8_decode('REGISTRO CONTENEDOR'), 0, 1);
    
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
$id_reporte=$_GET["id_reporte"];
$sql = $conexion->query("SELECT re.fecha_inspeccion,
re.semana,
re.fecha_hora_salida,
re.hora_llegada,
re.cupo,
re.nombre_acopio,
re.contenedor,
re.candados,
re.num_contenedor,
tp.tipo_de_caja,
ve.chasis,
ve.placa,
CONCAT(cho.nombre,' ',cho.apellido) as Nombre_Chofer,
cho.cedula,
con.sellos_externos,con.sellos_internos
from registro_llegada re inner join  cont_export con on re.id=con.id_registro_llegada   inner join tipo_cajas tp on tp.id=re.id_tipo_caja 
inner join vehiculo ve on ve.id=re.id_vehiculo  inner join chofer cho on cho.id=re.id_chofer where re.num_contenedor=$id_reporte");

$sql1 = $conexion->query("SELECT ve.lugar,ins.verificacion
FROM registro_llegada re inner join cont_export con ON re.id=con.id_registro_llegada inner join inspeccion_contenedor ins ON con.id=ins.id_cont_export inner join verificar_lugar ve ON ve.id=ins.id_verificar_lugar where re.num_contenedor=$id_reporte");

$sql2= $conexion->query("SELECT li.opciones,hi.opcion
FROM registro_llegada re inner join cont_export con ON re.id=con.id_registro_llegada inner join higiene_contenedor hi ON hi.id_cont_export=con.id inner join limpieza_contenedor li ON li.id=hi.id_limpieza_contenedor  where re.num_contenedor=$id_reporte limit 4 ");
$sql4= $conexion->query("SELECT li.opciones, hi.opcion,con.obser_hig_contenedor
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN higiene_contenedor hi ON hi.id_cont_export = con.id
INNER JOIN limpieza_contenedor li ON li.id = hi.id_limpieza_contenedor
where re.num_contenedor=$id_reporte
ORDER BY hi.id DESC
 LIMIT 4 ");
 

$sql3 =$conexion->query("SELECT da.filtro,
da.termografo,
da.termografo_numero,
da.sello_adhesivo,
da.sello_verificador,
da.sello_exp_candado,
da.fecha_hora_salida,
da.sello_exp_cable,
da.compania_transportista,
da.sello_naviero,
da.vapor,
da.destino,
CONCAT(pa.nombre,' ',pa.apellido) Nombre_Paletizador,
da.total_viajar,
da.cajas,
da.cantidad_palet,
da.observacion_despacho
from registro_llegada re inner join cont_export con ON re.id=con.id_registro_llegada 
inner join datos_despacho da ON con.id=da.id_cont_export inner join paletizadores pa ON pa.id=da.paletizadores where re.num_contenedor=$id_reporte ");

$sql5 =$conexion->query("SELECT pal.cantidad,ca.cantidad as Cajas
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN control_pallet pal ON con.id=pal.id_cont_export inner join cantidad_cajas ca ON ca.id=pal.id_cantidad_cajas  where re.num_contenedor=$id_reporte  limit 5 ");
$sql6 =$conexion->query("SELECT pal.id,pal.cantidad,ca.cantidad as Cajas
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN control_pallet pal ON con.id=pal.id_cont_export inner join cantidad_cajas ca ON ca.id=pal.id_cantidad_cajas where re.num_contenedor=$id_reporte  limit 5 OFFSET 5;");
$sql7 =$conexion->query("SELECT pal.id,pal.cantidad,ca.cantidad as Cajas
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN control_pallet pal ON con.id=pal.id_cont_export inner join cantidad_cajas ca ON ca.id=pal.id_cantidad_cajas  where re.num_contenedor=$id_reporte  limit 5 OFFSET 10;");
$sql8 =$conexion->query("SELECT pal.id,pal.cantidad,ca.cantidad as Cajas
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN control_pallet pal ON con.id=pal.id_cont_export inner join cantidad_cajas ca ON ca.id=pal.id_cantidad_cajas  where re.num_contenedor=$id_reporte  limit 5 OFFSET 15;");






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
$pdf->SetxY(85,30);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 30,190, 5, 'D');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(85,5,'Control Despacho', 0, 0, 'L');
$pdf->SetY(35);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 35,190, 30.9, 'D'); // Crear un rectángulo con bordes en la posición (10,30) con una anchura de 70 y una altura de 10 unidades

$pdf->SetFont('Arial','B',6);
$pdf->SetXY(10, 35); // Establecer la posición del cursor en (12,32)
$pdf->Cell(18,5,'Fecha Inspeccion:', 0, 0, 'L');

$pdf->SetFont('Arial','',6);
$pdf->SetXY(42, 35); // Establecer la posición del cursor en (42,32)
$pdf->Cell(40,5,$fila['fecha_inspeccion'], 0, 0, 'L');

$pdf->SetXY(65,35);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(20,5,'Semana:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['semana'], 0, 0, 'L');
$pdf->SetXY(95,35);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Fecha Hora y salida:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(40,5,$fila['fecha_hora_salida'], 0, 0, 'L');
$pdf->SetXY(160,35);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(25,5,'Hora Llegada:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(25,5,$fila['hora_llegada'], 0, 0, 'L');
$pdf->SetY(40);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Tipo de Cajas:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(50,5,$fila['tipo_de_caja'], 0, 0, 'L');
$pdf->SetXY(65,40);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(20,5,'Cupo:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(35,5,$fila['cupo'], 0, 0, 'L');
$pdf->SetxY(95,40);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Contenedor:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(60,5,$fila['contenedor'], 0, 0, 'L');
$pdf->SetXY(160,40);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(25,5,'Placa:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['placa'], 0, 0, 'L');
$pdf->SetXY(230,40);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(25,5,'Chasis:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(40,5,$fila['chasis'], 0, 0, 'L');
$pdf->SetY(45);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Nombre Chofer:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(40,5,$fila['Nombre_Chofer'], 0, 0, 'L');
$pdf->SetXY(95,45);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Nombre Finca:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['nombre_acopio'], 0, 0, 'L');
$pdf->SetY(50);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(85,5,'Candado:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['candados'], 0, 0, 'L');
$pdf->SetY(55);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(25,5,'Sellos Internos:', 0, 0, 'L');
$pdf->SetY(60);
$pdf->SetFont('Arial','',6);
$sellos_externos = explode(',', $fila['sellos_internos']); // Dividir los datos en un array
foreach ($sellos_externos as $sello) {
    $pdf->Cell(40,5,$sello, 0, 1, 'L'); // Mostrar cada elemento en una celda nueva
}


$pdf->SetXY(90,55);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(25,5,'Sellos Externos :', 0, 0, 'L');
$pdf->SetXY(90,60);
$pdf->SetFont('Arial','',6);
$sellos_internos = explode(',', $fila['sellos_externos']); // Dividir los datos en un array
foreach ($sellos_internos as $sello) {
    $pdf->Cell(40,5,$sello, 0, 1, 'L'); // Mostrar cada elemento en una celda nueva
    
}
// Fin de  DATOS Llegada

$pdf->SetxY(85,66);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 66,190, 5, 'D');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(85,5,'Inspeccion Contenedor', 0, 0, 'L');
$pdf->Image('./../../../img/Contenedor.png',95.8,72,105,46.5);
$pdf->SetY(71);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 4, utf8_decode('LUGAR'), 1, 0, 'C', 0);
$pdf->Cell(30, 4, utf8_decode('VERIFCACIÓN'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql1)) {
    // Agregar los datos de la fila a la página
    $pdf->Cell(55,4,$fila[utf8_decode('lugar')], 1, 0, 'C');
    $pdf->Cell(30,4,$fila['verificacion'], 1, 1, 'C');
    
}

// Fin de inspeccion contenedor

$pdf->SetxY(85,119.4);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 119.4,190, 5, 'D');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(85,5,'Higiene Contenedor', 0, 0, 'L');
$pdf->SetY(124.8);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(70, 4, utf8_decode('OPCIONES'), 1, 0, 'C', 0);
$pdf->Cell(25, 4, utf8_decode('VERIFCACIÓN'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql2)) {
    // Agregar los datos de la fila a la página
    $pdf->Cell(70,4,$fila[utf8_decode('opciones')], 1, 0, 'C');
    $pdf->Cell(25,4,$fila['opcion'], 1, 1, 'C');
}

$pdf->SetxY(105,124.8);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(70, 4, utf8_decode('OPCIONES'), 1, 0, 'C', 0);
$pdf->Cell(25, 4, utf8_decode('VERIFCACIÓN'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql4)) {
    $pdf->SetX(105);
    // Agregar los datos de la fila a la página
    $pdf->Cell(70,4,$fila[utf8_decode('opciones')], 1, 0, 'C');
    $pdf->Cell(25,4,$fila['opcion'], 1, 1, 'C');
}
// Fin Higiene contenedor
$fila = mysqli_fetch_assoc($sql3);
$pdf->SetxY(85,145);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 145,190, 5, 'D');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(85,5,'Control Despacho', 0, 0, 'L');
$pdf->SetY(151);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 150,190, 30, 'D');
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,5,'Filtro:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(40,5,$fila['filtro'], 0, 0, 'L');
$pdf->SetXY(40,151);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(25,5,'Termografo:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(25,5,$fila['termografo'], 0, 0, 'L');
$pdf->SetXY(85,151);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Termografo#::', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(25,5,$fila['termografo_numero'], 0, 0, 'L');
$pdf->SetXY(150,151);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Sello Adhesivo:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(55,5,$fila['sello_adhesivo'], 0, 0, 'L');
$pdf->SetY(156);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Sello Verificador:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(50,5,$fila['sello_verificador'], 0, 0, 'L');
$pdf->SetXY(85,156);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(55,5,'Sello Exportador Candado:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(35,5,$fila['sello_exp_candado'], 0, 0, 'L');
$pdf->SetY(161);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Fecha Hora Salida:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['fecha_hora_salida'], 0, 0, 'L');
$pdf->SetXY(85,161);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Sello Exportador Cable:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(45,5,$fila['sello_exp_cable'], 0, 0, 'L');
$pdf->SetXY(150,161);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Compañia Transportista:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(60,5,$fila['compania_transportista'], 0, 0, 'L');
$pdf->SetY(166);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Sello Naviero:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(35,5,$fila['sello_naviero'], 0, 0, 'L');
$pdf->SetXY(64,166);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,5,'Vapor:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(40,5,$fila['vapor'], 0, 0, 'L');
$pdf->SetXY(100,166);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(20,5,'Destino:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['destino'], 0, 0, 'L');
$pdf->SetXY(150,166);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Nombre Paletizador:');
$pdf->SetFont('Arial','',6);
$pdf->Cell(60,5,$fila['Nombre_Paletizador'], 0, 0, 'L');
$pdf->SetY(171);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(31,5,'Total a Viajar::', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['total_viajar'], 0, 0, 'L');
$pdf->SetXY(64,171);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,5,'Cajas:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['cajas'], 0, 0, 'L');
$pdf->SetXY(90,171);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(25,5,'Cantidad Palet:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['cantidad_palet'], 0, 0, 'L');
$pdf->SetXY(125,171);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Observación:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(50,5,$fila['observacion_despacho'], 0, 0, 'L');
// completo despacho

$pdf->SetxY(85,175);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 175,190, 5, 'D');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(85,5,'Control Pallet', 0, 0, 'L');

$pdf->SetxY(10,180);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(25, 4, utf8_decode('Pallet'), 1, 0, 'C', 0);
$pdf->Cell(25, 4, utf8_decode('Cajas'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql5)) {
    $pdf->SetX(10);
    // Agregar los datos de la fila a la página
    $pdf->Cell(25,4,$fila['cantidad'], 1, 0, 'C');
    $pdf->Cell(25,4,$fila['Cajas'], 1, 1, 'C');
}
$pdf->SetxY(60,180);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(25, 4, utf8_decode('Pallet'), 1, 0, 'C', 0);
$pdf->Cell(20, 4, utf8_decode('Cajas'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql6)) {
    $pdf->SetX(60);
    // Agregar los datos de la fila a la página
    $pdf->Cell(25,4,$fila['cantidad'], 1, 0, 'C');
    $pdf->Cell(20,4,$fila['Cajas'], 1, 1, 'C');
}
$pdf->SetxY(105,180);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(25, 4, utf8_decode('Pallet'), 1, 0, 'C', 0);
$pdf->Cell(20, 4, utf8_decode('Cajas'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql7)) {
    $pdf->SetX(105);
    // Agregar los datos de la fila a la página
    $pdf->Cell(25,4,$fila['cantidad'], 1, 0, 'C');
    $pdf->Cell(20,4,$fila['Cajas'], 1, 1, 'C');
}

$pdf->SetxY(150,180);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(25, 4, utf8_decode('Pallet'), 1, 0, 'C', 0);
$pdf->Cell(25, 4, utf8_decode('Cajas'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql8)) {
    $pdf->SetX(150);
    // Agregar los datos de la fila a la página
    $pdf->Cell(25,4,$fila['cantidad'], 1, 0, 'C');
    $pdf->Cell(25,4,$fila['Cajas'], 1, 1, 'C');
}

$pdf->Output();
?>