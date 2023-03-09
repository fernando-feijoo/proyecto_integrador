<?php
require('./../../../librery_code/fpdf/fpdf.php');
require('./../../modelo/conexion_bd.php');
date_default_timezone_set('America/Guayaquil');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->SetFillColor(255, 255, 255);
    $this->Rect(10, 1,190, 22.7, 'D');
    $this->Rect(10, 1,20, 22.7, 'D');
    $this->Rect(30, 1,135, 5, 'D');
    $this->Rect(30, 6,135, 5, 'D');
    $this->Rect(30, 11,135, 5, 'D');
    $this->Rect(30, 16,135, 8, 'D');
    $this->Rect(165, 1,35, 22.7, 'D');
    $this->Rect(165, 1,35, 5, 'D');
     $this->Rect(165, 1,17.5, 5, 'D');
    $this->Rect(165, 6,35, 5, 'D');
     $this->Rect(165, 6,17.5, 5, 'D');
    $this->Rect(165, 11,35, 5, 'D');
    $this->Rect(165, 11,17.5, 5, 'D');
     $this->Rect(165, 16,35, 8, 'D');
     $this->Rect(165, 16,17.5, 8, 'D');
    $this->Image('./../../../img/logo-empresa-login.png', 12, 5, 15);

    $this->SetY(0.3);
    $this->SetX(74);
    $this->SetFont('Arial', 'B', 8);
    $this->Cell(89, 8, utf8_decode('ASOCIACION TIERRA FÉRTIL'), 0, 1);
    $this->SetY(0.3);
    $this->SetX(165);
    $this->SetFont('Arial', 'B', 7);
    $this->Cell(89, 8, utf8_decode('CODIGO:'), 0, 1);
     $this->SetY(0.3);
    $this->SetX(185.5);
    $this->SetFont('Arial', 'B', 7);
    $this->Cell(89, 8, utf8_decode('FPT-09'), 0, 1);

   $this->SetY(5);
    $this->SetX(36);
    $this->SetFont('Arial', 'B', 8);
    $this->Cell(89, 8, utf8_decode('BITACORA PARA SEGUIMIENTO DE CONTENEDORES DE EXPORTACION EN ACOPIO'), 0, 1);
    $this->SetY(5);
    $this->SetX(165);
    $this->SetFont('Arial', 'B', 7);
    $this->Cell(89, 8, utf8_decode('VERSION: 1'), 0, 1);
     $this->SetY(5);
    $this->SetX(183);
    $this->SetFont('Arial', 'B', 6);
    $this->Cell(89, 8, utf8_decode('(16 MAR 2023)'), 0, 1);




    $this->SetY(10);
    $this->SetX(75);
    $this->SetFont('Arial', 'B', 8);
    $this->Cell(89, 8, utf8_decode('DEPARTAMENTO TECNICO '), 0, 1);
    $this->SetY(10);  
    $this->SetX(165);
    $this->SetFont('Arial', 'B', 7);
    $this->Cell(89, 8, utf8_decode('REVISION: 0'), 0, 1);
    $this->SetY(10);
    $this->SetX(183);
    $this->SetFont('Arial', 'B', 6);
    $this->Cell(89, 8, utf8_decode('(16 MAR 2023) '), 0, 1);






     $this->SetY(15);
    $this->SetX(75);
    $this->SetFont('Arial', 'B', 8);
    $this->Cell(89, 8, utf8_decode('CDLA JESUS DEL BUEN '), 0, 1);
    $this->SetY(16);    
    $this->SetX(165);
    $this->SetFont('Arial', 'B', 8);
    $this->Cell(89, 8, utf8_decode('FLO ID:'), 0, 1);
    $this->SetY(16);    
    $this->SetX(183);
    $this->SetFont('Arial', 'B', 8);
    $this->Cell(89, 8, utf8_decode('30552'), 0, 1);

    $this->SetY(18);
    $this->SetX(85);
    $this->SetFont('Arial', 'B', 8);
    $this->Cell(89, 8, utf8_decode(' PASTOR '), 0, 1);
    
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
$sql = $conexion->query("SELECT re.fecha_inspeccion ,
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
cho.cedula
from registro_llegada re inner join  cont_export con on re.id=con.id_registro_llegada   inner join tipo_cajas tp on tp.id=re.id_tipo_caja 
inner join vehiculo ve on ve.id=re.id_vehiculo  inner join chofer cho on cho.id=re.id_chofer where re.num_contenedor=$id_reporte");

$sql1 = $conexion->query("SELECT ve.lugar,
IF(ins.verificacion = 1, 'X', '') AS verificacion
FROM registro_llegada re 
INNER JOIN cont_export con ON re.id = con.id_registro_llegada 
INNER JOIN inspeccion_contenedor ins ON con.id = ins.id_cont_export 
INNER JOIN verificar_lugar ve ON ve.id = ins.id_verificar_lugar 
WHERE re.num_contenedor = $id_reporte");

$sql2= $conexion->query("SELECT li.opciones, 
CASE hi.opcion 
     WHEN 1 THEN 'si' 
     WHEN 0 THEN 'no' 
     ELSE '' 
END AS opcion 
FROM registro_llegada re 
INNER JOIN cont_export con ON re.id = con.id_registro_llegada 
INNER JOIN higiene_contenedor hi ON hi.id_cont_export = con.id 
INNER JOIN limpieza_contenedor li ON li.id = hi.id_limpieza_contenedor 
WHERE re.num_contenedor = $id_reporte LIMIT 4 ");
$sql4= $conexion->query("SELECT li.opciones, CASE hi.opcion 
WHEN 1 THEN 'si' 
WHEN 0 THEN 'no' 
ELSE '' 
END AS opcion 
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN higiene_contenedor hi ON hi.id_cont_export = con.id
INNER JOIN limpieza_contenedor li ON li.id = hi.id_limpieza_contenedor
where re.num_contenedor=$id_reporte
ORDER BY hi.id DESC
 LIMIT 4 ");
 


$sql3 =$conexion->query("SELECT
    da.filtro,
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
    GROUP_CONCAT(CONCAT(pa.nombre,' ', pa.apellido)) AS nombres_paletizadores,
    da.total_viajar,
    da.cajas,
    da.cantidad_palet,
    da.observacion_despacho
FROM registro_llegada re
    INNER JOIN cont_export con ON (re.id = con.id_registro_llegada)
    INNER JOIN datos_despacho da ON (con.id = da.id_cont_export)
    INNER JOIN paletizadores pa ON FIND_IN_SET(pa.id, REPLACE(da.paletizadores, ';', ','))
WHERE re.num_contenedor = $id_reporte ");

$sql5 =$conexion->query("SELECT  ROW_NUMBER() OVER(ORDER BY pal.cantidad) as Pallet,pal.cantidad as Codigo, ca.cantidad as Cajas
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN control_pallet pal ON con.id = pal.id_cont_export
INNER JOIN cantidad_cajas ca ON ca.id = pal.id_cantidad_cajas
WHERE re.num_contenedor = $id_reporte
LIMIT 5; ");
$sql6 =$conexion->query("SELECT  ROW_NUMBER() OVER(ORDER BY pal.cantidad) as Pallet,pal.cantidad as Codigo, ca.cantidad as Cajas
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN control_pallet pal ON con.id = pal.id_cont_export
INNER JOIN cantidad_cajas ca ON ca.id = pal.id_cantidad_cajas
WHERE re.num_contenedor = $id_reporte
LIMIT 5 OFFSET 5");
$sql7 =$conexion->query("SELECT  ROW_NUMBER() OVER(ORDER BY pal.cantidad) as Pallet,pal.cantidad as Codigo, ca.cantidad as Cajas
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN control_pallet pal ON con.id=pal.id_cont_export inner join cantidad_cajas ca ON ca.id=pal.id_cantidad_cajas  where re.num_contenedor=$id_reporte  limit 5 OFFSET 10;");
$sql8 =$conexion->query("SELECT  ROW_NUMBER() OVER(ORDER BY pal.cantidad) as Pallet,pal.cantidad as Codigo, ca.cantidad as Cajas
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN control_pallet pal ON con.id=pal.id_cont_export inner join cantidad_cajas ca ON ca.id=pal.id_cantidad_cajas  where re.num_contenedor=$id_reporte  limit 5 OFFSET 15;");
$sql9 =$conexion->query("  SELECT CONCAT(NULLIF(fi.nombre,''), ' ', NULLIF(fi.apellido,'')) as Nombre_rep_acopio, fi.cedula
FROM registro_llegada re inner join cont_export con ON re.id=con.id_registro_llegada inner join firma_rep_acopio fr on fr.id=con.id_firma_resp_acopio 
inner join firmantes fi ON fi.id=fr.id_firmante where re.num_contenedor=$id_reporte");
$sql10 =$conexion->query(" SELECT CONCAT(NULLIF(fi.nombre,''), ' ', NULLIF(fi.apellido,''))  as Nombre_eval_fruta, fi.cedula
FROM registro_llegada re inner join cont_export con ON re.id=con.id_registro_llegada inner join firma_eval_fruta fr on fr.id=con.id_firma_eval_fruta 
inner join firmantes fi ON fi.id=fr.id_firmante where re.num_contenedor=$id_reporte");

$sql11 =$conexion->query("SELECT CONCAT(NULLIF(fi.nombre,''), ' ', NULLIF(fi.apellido,'')) as Nombre_verif_contenedor, fi.cedula
FROM registro_llegada re inner join cont_export con ON re.id=con.id_registro_llegada inner join firma_verif_contenedor fr on fr.id=con.id_firma_verif_contenedor
inner join firmantes fi ON fi.id=fr.id_firmante where re.num_contenedor=$id_reporte");

$sql13 =$conexion->query("SELECT CONCAT(NULLIF(cho.nombre,''), ' ', NULLIF(cho.apellido,'')) as choferes, cho.cedula
FROM registro_llegada re inner join cont_export con ON re.id=con.id_registro_llegada inner join chofer cho ON cho.id=con.id_firma_chofer_contenedor where re.num_contenedor=$id_reporte");



$sql20= $conexion->query("SELECT GROUP_CONCAT(DISTINCT con.obser_ins_contenedor ) AS Observacion
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN inspeccion_contenedor ins ON con.id = ins.id_cont_export
INNER JOIN verificar_lugar ve ON ve.id = ins.id_verificar_lugar
WHERE re.num_contenedor = $id_reporte
GROUP BY con.obser_ins_contenedor");

$sql21= $conexion->query("SELECT  GROUP_CONCAT(DISTINCT con.obser_hig_contenedor ) AS observacion
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN higiene_contenedor hi ON con.id = hi.id_cont_export
INNER JOIN limpieza_contenedor li ON li.id = hi.id_limpieza_contenedor
WHERE re.num_contenedor = $id_reporte
GROUP BY con.obser_hig_contenedor");
$sql22= $conexion->query("SELECT  GROUP_CONCAT(DISTINCT con.obser_general ) AS observacion
FROM registro_llegada re
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN control_pallet pal ON con.id=pal.id_cont_export inner join cantidad_cajas ca ON ca.id=pal.id_cantidad_cajas  where re.num_contenedor=$id_reporte");

$sql23= $conexion->query("SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(con.sellos_internos, ';', 1), ';', -1) AS sello
FROM registro_llegada re 
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN tipo_cajas tp ON tp.id = re.id_tipo_caja 
INNER JOIN vehiculo ve ON ve.id = re.id_vehiculo
INNER JOIN chofer cho ON cho.id = re.id_chofer 
WHERE re.num_contenedor = $id_reporte");



$sql26= $conexion->query("SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(con.sellos_internos, ';', 2), ';', -1) AS sell
FROM registro_llegada re 
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN tipo_cajas tp ON tp.id = re.id_tipo_caja 
INNER JOIN vehiculo ve ON ve.id = re.id_vehiculo
INNER JOIN chofer cho ON cho.id = re.id_chofer 
WHERE re.num_contenedor = $id_reporte");



$sql25= $conexion->query ("SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(con.sellos_internos, ';', 3), ';', -1) AS sell1
FROM registro_llegada re 
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN tipo_cajas tp ON tp.id = re.id_tipo_caja 
INNER JOIN vehiculo ve ON ve.id = re.id_vehiculo
INNER JOIN chofer cho ON cho.id = re.id_chofer 
WHERE re.num_contenedor = $id_reporte");

$sql24= $conexion->query("SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(con.sellos_externos, ';', 1), ';', -1) AS sello1,
SUBSTRING_INDEX(SUBSTRING_INDEX(con.sellos_externos, ';', 2), ';', -1) AS sello2,
SUBSTRING_INDEX(SUBSTRING_INDEX(con.sellos_externos, ';', 3), ';', -1) AS sello3
FROM registro_llegada re 
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN tipo_cajas tp ON tp.id = re.id_tipo_caja 
INNER JOIN vehiculo ve ON ve.id = re.id_vehiculo
INNER JOIN chofer cho ON cho.id = re.id_chofer 
WHERE re.num_contenedor = $id_reporte");

$sql27= $conexion->query("SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(con.sellos_externos, ';', 4), ';', -1) AS sello4,
SUBSTRING_INDEX(SUBSTRING_INDEX(con.sellos_externos, ';', 5), ';', -1) AS sello5,
SUBSTRING_INDEX(SUBSTRING_INDEX(con.sellos_externos, ';', 6), ';', -1) AS sello6
FROM registro_llegada re 
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN tipo_cajas tp ON tp.id = re.id_tipo_caja 
INNER JOIN vehiculo ve ON ve.id = re.id_vehiculo
INNER JOIN chofer cho ON cho.id = re.id_chofer 
WHERE re.num_contenedor = $id_reporte");

$sql28= $conexion->query("SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(con.sellos_externos, ';', 7), ';', -1) AS sello7,
SUBSTRING_INDEX(SUBSTRING_INDEX(con.sellos_externos, ';', 8), ';', -1) AS sello8,
SUBSTRING_INDEX(SUBSTRING_INDEX(con.sellos_externos, ';', 9), ';', -1) AS sello9
FROM registro_llegada re 
INNER JOIN cont_export con ON re.id = con.id_registro_llegada
INNER JOIN tipo_cajas tp ON tp.id = re.id_tipo_caja 
INNER JOIN vehiculo ve ON ve.id = re.id_vehiculo
INNER JOIN chofer cho ON cho.id = re.id_chofer 
WHERE re.num_contenedor = $id_reporte");

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
$pdf->SetxY(85,24);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 24,190, 5, 'D');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(85,5,'Control Despacho', 0, 0, 'L');
$pdf->SetY(29);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 29,190, 30.9, 'D'); // Crear un rectángulo con bordes en la posición (10,30) con una anchura de 70 y una altura de 10 unidades

$pdf->SetFont('Arial','B',6);
$pdf->SetXY(10, 29); // Establecer la posición del cursor en (12,32)
$pdf->Cell(18,5,'Fecha Inspeccion:', 0, 0, 'L');

$pdf->SetFont('Arial','',6);
$pdf->SetXY(42, 29); // Establecer la posición del cursor en (42,32)
$pdf->Cell(40,5,$fila['fecha_inspeccion'], 0, 0, 'L');

$pdf->SetXY(65,29);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(20,5,'Semana:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['semana'], 0, 0, 'L');
$pdf->SetXY(95,29);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Fecha Hora y salida:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(40,5,$fila['fecha_hora_salida'], 0, 0, 'L');
$pdf->SetXY(160,29);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,5,'Hora Llegada:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(25,5,$fila['hora_llegada'], 0, 0, 'L');
$pdf->SetY(34);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Tipo de Cajas:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(50,5,$fila['tipo_de_caja'], 0, 0, 'L');
$pdf->SetXY(65,34);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,5,'Cupo:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(29,5,$fila['cupo'], 0, 0, 'L');
$pdf->SetxY(95,34);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(20,5,'Contenedor:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(60,5,$fila['contenedor'], 0, 0, 'L');
$pdf->SetXY(160,34);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,5,'Placa:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['placa'], 0, 0, 'L');
$pdf->SetXY(230,34);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(25,5,'Chasis:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(40,5,$fila['chasis'], 0, 0, 'L');
$pdf->SetY(39);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Nombre Chofer:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(40,5,$fila['Nombre_Chofer'], 0, 0, 'L');
$pdf->SetXY(95,39);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Nombre Finca:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['nombre_acopio'], 0, 0, 'L');
$pdf->SetY(44);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(85,5,'Candado:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['candados'], 0, 0, 'L');
$fila = mysqli_fetch_assoc($sql23);
$pdf->SetY(47.5);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(85,5,'Sellos Internos:', 0, 0, 'L');
$pdf->SetxY(20,49.8);
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['sello'], 0, 0, 'L');
$fila = mysqli_fetch_assoc($sql26);
$pdf->SetxY(20,52.8);
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['sell'], 0, 0, 'L');
$fila = mysqli_fetch_assoc($sql25);
$pdf->SetxY(20,55.8);
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['sell1'], 0, 0, 'L');

$fila = mysqli_fetch_assoc($sql24);
$pdf->SetxY(130,47.5);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(85,5,'Sellos Externos:', 0, 0, 'L');
$pdf->SetxY(100,49.8);
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['sello1'], 0, 0, 'L');
$pdf->SetxY(100,52.8);
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['sello2'], 0, 0, 'L');
$pdf->SetxY(100,55.8);
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['sello3'], 0, 0, 'L');
$fila = mysqli_fetch_assoc($sql27);
$pdf->SetxY(135,49.8);
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['sello4'], 0, 0, 'L');
$pdf->SetxY(135,52.8);
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['sello5'], 0, 0, 'L');
$pdf->SetxY(135,55.8);
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['sello6'], 0, 0, 'L');
$fila = mysqli_fetch_assoc($sql28);
$pdf->SetxY(170,49.8);
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['sello7'], 0, 0, 'L');
$pdf->SetxY(170,52.8);
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['sello8'], 0, 0, 'L');
$pdf->SetxY(170,55.8);
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['sello9'], 0, 0, 'L');
// Fin de  DATOS Llegada
$fila = mysqli_fetch_assoc($sql20);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 113,190, 6, 'D');
$pdf->SetXY(10,113.5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,5,utf8_decode('Observación:'), 0, 0, 'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(50,5,$fila['Observacion'], 0, 0, 'L');

$pdf->SetxY(85,60);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 60,190, 5, 'D');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(85,5,'Inspeccion Contenedor', 0, 0, 'L');

// Dibuja una línea sólida en la parte derecha de la imagen
$lineLength = 10; // longitud de la línea en milímetros
$posX = 95.8 + 114.2 - $lineLength; // posición X en la parte derecha de la imagen
$posY = 60; // posición Y en la parte superior de la imagen
$pdf->Line($posX, $posY, $posX, $posY + 55.5); // dibuja la línea

$pdf->Image('./../../../img/ContenedorNuevo.png',95.8,66,105,46.5);
$pdf->SetY(65);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 4, utf8_decode('LUGAR'), 1, 0, 'C', 0);
$pdf->Cell(30, 4, utf8_decode('VERIFCACIÓN'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql1)) {
    // Agregar los datos de la fila a la página
    $pdf->Cell(55,4,utf8_decode($fila['lugar']), 1, 0, 'C');
    $pdf->Cell(30,4,utf8_decode($fila['verificacion']), 1, 1, 'C');
}


// Fin de inspeccion contenedor

$fila = mysqli_fetch_assoc($sql21);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 144,190, 6, 'D');
$pdf->SetXY(10,144.5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,5,utf8_decode('Observación:'), 0, 0, 'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(50,5,$fila['observacion'], 0, 0, 'L');

$pdf->SetxY(85,119);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 119,190, 5, 'D');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(85,5,'Higiene Contenedor', 0, 0, 'L');
$pdf->SetY(124);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(70, 4, utf8_decode('OPCIONES'), 1, 0, 'C', 0);
$pdf->Cell(25, 4, utf8_decode('VERIFCACIÓN'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql2)) {
    // Agregar los datos de la fila a la página
    $pdf->Cell(70,4,utf8_decode($fila['opciones']), 1, 0, 'C');
    $pdf->Cell(25,4,utf8_decode($fila['opcion']), 1, 1, 'C');
}

$pdf->SetxY(105,124);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(70, 4, utf8_decode('OPCIONES'), 1, 0, 'C', 0);
$pdf->Cell(25, 4, utf8_decode('VERIFCACIÓN'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql4)) {
    $pdf->SetX(105);
    // Agregar los datos de la fila a la página
    $pdf->Cell(70,4,utf8_decode($fila['opciones']), 1, 0, 'C');
    $pdf->Cell(25,4,utf8_decode($fila['opcion']), 1, 1, 'C');
}

// Fin Higiene contenedor

$fila = mysqli_fetch_assoc($sql3);
$pdf->SetxY(85,150);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 150,190, 5, 'D');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(85,5,'Control Despacho', 0, 0, 'L');
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 155,190, 30, 'D');
$pdf->SetY(156);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,5,'Filtro:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(40,5,$fila['filtro'], 0, 0, 'L');
$pdf->SetXY(40,156);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(25,5,'Termografo:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(25,5,$fila['termografo'], 0, 0, 'L');
$pdf->SetXY(85,156);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(20,5,'Termografo#::', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(25,5,utf8_decode($fila['termografo_numero']), 0, 0, 'L');
$pdf->SetXY(125,156);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(25,5,'Sello Adhesivo:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(55,5,$fila['sello_adhesivo'], 0, 0, 'L');
$pdf->SetY(161);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Sello Verificador:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(50,5,$fila['sello_verificador'], 0, 0, 'L');
$pdf->SetXY(85,161);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(55,5,'Sello Exportador Candado:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(35,5,$fila['sello_exp_candado'], 0, 0, 'L');
$pdf->SetY(166);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(30,5,'Fecha Hora Salida:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['fecha_hora_salida'], 0, 0, 'L');
$pdf->SetXY(65,166);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(25,5,'Sello Exportador Cable:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(45,5,$fila['sello_exp_cable'], 0, 0, 'L');
$pdf->SetXY(115,166);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(28,5,utf8_decode('Compañia Transportista:'), 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(60,5,$fila['compania_transportista'], 0, 0, 'L');
$pdf->SetY(171);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,5,'Sello Naviero:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(35,5,$fila['sello_naviero'], 0, 0, 'L');
$pdf->SetXY(50,171);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(10,5,'Vapor:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(40,5,$fila['vapor'], 0, 0, 'L');
$pdf->SetXY(85,171);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(10,5,'Destino:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['destino'], 0, 0, 'L');
$pdf->SetXY(115,171);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(25,5,'Nombre Paletizador:');
$pdf->SetFont('Arial','',6);
$pdf->Cell(45,5,$fila['nombres_paletizadores'], 0, 0, 'L');
$pdf->SetY(176);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,5,'Total a Viajar::', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['total_viajar'], 0, 0, 'L');
$pdf->SetXY(35,176);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(10,5,'Cajas:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['cajas'], 0, 0, 'L');
$pdf->SetXY(55,176);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(15,5,'Cantidad Palet:', 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(30,5,$fila['cantidad_palet'], 0, 0, 'L');
$pdf->SetXY(80,176);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(20,5,utf8_decode('Observación:'), 0, 0, 'L');
$pdf->SetFont('Arial','',6);
$pdf->Cell(50,5,$fila['observacion_despacho'], 0, 0, 'L');
// completo despacho


$fila = mysqli_fetch_assoc($sql22);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 204,190, 6, 'D');
$pdf->SetXY(10,204.5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,5,utf8_decode('Observación:'), 0, 0, 'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(50,5,$fila['observacion'], 0, 0, 'L');

$pdf->SetxY(90,180);
$pdf->SetFillColor(255, 255, 255); // Establecer el color de relleno del rectángulo a blanco
$pdf->Rect(10, 180,190, 5, 'D');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(85,5,'Control Pallet', 0, 0, 'L');

$pdf->SetxY(10,185);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 4, utf8_decode('Pallet'), 1, 0, 'C', 0);
$pdf->Cell(15, 4, utf8_decode('Codigo'), 1, 0, 'C', 0);
$pdf->Cell(15, 4, utf8_decode('Cajas'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql5)) {
    $pdf->SetX(10);
    // Agregar los datos de la fila a la página
    $pdf->Cell(15,3,$fila['Pallet'], 1, 0, 'C');
    $pdf->Cell(15,3,$fila['Codigo'], 1, 0, 'C');
    $pdf->Cell(15,3,$fila['Cajas'], 1, 1, 'C');
}

$pdf->SetxY(57,185);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 4, utf8_decode('Pallet'), 1, 0, 'C', 0);
$pdf->Cell(15, 4, utf8_decode('Codigo'), 1, 0, 'C', 0);
$pdf->Cell(15, 4, utf8_decode('Cajas'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql6)) {
    $pdf->SetX(57);
    // Agregar los datos de la fila a la página
    $pdf->Cell(15,3,$fila['Pallet'], 1, 0, 'C');
    $pdf->Cell(15,3,$fila['Codigo'], 1, 0, 'C');
    $pdf->Cell(15,3,$fila['Cajas'], 1, 1, 'C');
}
$pdf->SetxY(105,185);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 4, utf8_decode('Pallet'), 1, 0, 'C', 0);
$pdf->Cell(15, 4, utf8_decode('Codigo'), 1, 0, 'C', 0);
$pdf->Cell(15, 4, utf8_decode('Cajas'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql7)) {
    $pdf->SetX(105);
    // Agregar los datos de la fila a la página
    $pdf->Cell(15,3,$fila['Pallet'], 1, 0, 'C');
    $pdf->Cell(15,3,$fila['Codigo'], 1, 0, 'C');
    $pdf->Cell(15,3,$fila['Cajas'], 1, 1, 'C');
}

$pdf->SetxY(155,185);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 4, utf8_decode('Pallet'), 1, 0, 'C', 0);
$pdf->Cell(15, 4, utf8_decode('Codigo'), 1, 0, 'C', 0);
$pdf->Cell(15, 4, utf8_decode('Cajas'), 1, 0, 'C', 0);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
while ($fila = mysqli_fetch_assoc($sql8)) {
    $pdf->SetX(155);
    // Agregar los datos de la fila a la página
    $pdf->Cell(15,3,$fila['Pallet'], 1, 0, 'C');
    $pdf->Cell(15,3,$fila['Codigo'], 1, 0, 'C');
    $pdf->Cell(15,3,$fila['Cajas'], 1, 1, 'C');
}

//FINALIZADO CONTROL PALLET

$fila = mysqli_fetch_assoc($sql9);
$pdf->Line(10, 250, 45, 250);

$pdf->SetFont('Arial','B',9);
$pdf->SetxY(10,252);
$pdf->Cell(18,5,'Responsable de Acopio', 0, 0, 'L');

$pdf->SetFont('Arial','B',7);
$pdf->SetXY(10, 256); // Establecer la posición del cursor en (12,32)
$pdf->Cell(18,5,'Nombre:', 0, 0, 'L');

$pdf->SetFont('Arial','',7);
$pdf->SetXY(22, 256); // Establecer la posición del cursor en (42,32)
$pdf->Cell(40,5,$fila['Nombre_rep_acopio'], 0, 0, 'L');
$pdf->SetFont('Arial','B',7);
$pdf->SetXY(10, 259); // Establecer la posición del cursor en (12,32)
$pdf->Cell(18,5,'Cedula:', 0, 0, 'L');

$pdf->SetFont('Arial','',7);
$pdf->SetXY(22, 259); // Establecer la posición del cursor en (42,32)
$pdf->Cell(40,5,$fila['cedula'], 0, 0, 'L');
 
$fila = mysqli_fetch_assoc($sql10);
$pdf->Line(60, 250, 96, 250);
$pdf->SetFont('Arial','B',9);
$pdf->SetxY(60,252);
$pdf->Cell(18,5,'Evaluador de Fruta', 0, 0, 'L');

$pdf->SetxY(20,256);
$pdf->SetFont('Arial','B',7);
$pdf->SetXY(60, 256); // Establecer la posición del cursor en (12,32)
$pdf->Cell(18,5,'Nombre:', 0, 0, 'L');

$pdf->SetFont('Arial','',7);
$pdf->SetXY(72, 256); // Establecer la posición del cursor en (42,32)
$pdf->Cell(40,5,$fila['Nombre_eval_fruta'], 0, 0, 'L');
$pdf->SetFont('Arial','B',7);
$pdf->SetXY(60, 259); // Establecer la posición del cursor en (12,32)
$pdf->Cell(18,5,'Cedula:', 0, 0, 'L');

$pdf->SetFont('Arial','',7);
$pdf->SetXY(72, 259); // Establecer la posición del cursor en (42,32)
$pdf->Cell(40,5,$fila['cedula'], 0, 0, 'L');

$fila = mysqli_fetch_assoc($sql11);
$pdf->Line(110, 250, 146, 250);
$pdf->SetFont('Arial','B',9);
$pdf->SetxY(110,252);
$pdf->Cell(18,5,'Verificador de Contenedor', 0, 0, 'L');

$pdf->SetxY(20,256);
$pdf->SetFont('Arial','B',7);
$pdf->SetXY(110, 256); // Establecer la posición del cursor en (12,32)
$pdf->Cell(18,5,'Nombre:', 0, 0, 'L');

$pdf->SetFont('Arial','',7);
$pdf->SetXY(125, 256); // Establecer la posición del cursor en (42,32)
$pdf->Cell(40,5,$fila['Nombre_verif_contenedor'], 0, 0, 'L');
$pdf->SetFont('Arial','B',7);
$pdf->SetXY(110, 259); // Establecer la posición del cursor en (12,32)
$pdf->Cell(18,5,'Cedula:', 0, 0, 'L');

$pdf->SetFont('Arial','',7);
$pdf->SetXY(125, 259); // Establecer la posición del cursor en (42,32)
$pdf->Cell(40,5,$fila['cedula'], 0, 0, 'L');

$fila = mysqli_fetch_assoc($sql13);
$pdf->Line(160, 250, 196, 250);
$pdf->SetFont('Arial','B',9);
$pdf->SetxY(160,252);
$pdf->Cell(18,5,'Chofer de Contenedor ', 0, 0, 'L');

$pdf->SetxY(20,256);
$pdf->SetFont('Arial','B',7);
$pdf->SetXY(160, 256); // Establecer la posición del cursor en (12,32)
$pdf->Cell(18,5,'Nombre:', 0, 0, 'L');

$pdf->SetFont('Arial','',7);
$pdf->SetXY(175, 256); // Establecer la posición del cursor en (42,32)
$pdf->Cell(40,5,$fila['choferes'], 0, 0, 'L');
$pdf->SetFont('Arial','B',7);
$pdf->SetXY(160,259); // Establecer la posición del cursor en (12,32)
$pdf->Cell(18,5,'Cedula:', 0, 0, 'L');

$pdf->SetFont('Arial','',7);
$pdf->SetXY(177, 259); // Establecer la posición del cursor en (42,32)
$pdf->Cell(40,5,$fila['cedula'], 0, 0, 'L');



$pdf->Output();
?>