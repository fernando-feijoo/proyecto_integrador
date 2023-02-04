<?php
require('./../../../librery_code/fpdf/fpdf.php');
require('./../../modelo/conexion_bd.php');
date_default_timezone_set('America/Guayaquil');
class PDF extends FPDF
{
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


    $this->SetY(14);
    $this->SetX(210);
    $this->SetFont('Arial', 'B', 10);
    $this->Cell(30, 6, utf8_decode('Reporte desde:'));

    $this->SetY(14);
    $this->SetX(240);
    $this->SetFont('Arial', '', 10);
    $this->Cell(30, 6, utf8_decode($_GET["f_ini"]));

    $this->SetY(20);
    $this->SetX(210);
    $this->SetFont('Arial', 'B', 10);
    $this->Cell(30, 6, utf8_decode('Reporte hasta:'));

    $this->SetY(20);
    $this->SetX(240);
    $this->SetFont('Arial', '', 10);
    $this->Cell(30, 6, utf8_decode($_GET["f_fin"]));


    $this->SetY(25);
    $this->SetX(105);
    $this->SetFont('Arial', 'B', 15);
    $this->Cell(89, 8, utf8_decode('REPORTE DATOS DE LLEGADA'), 0, 1);

    $this->Ln(2);
  }

  function Footer()
  {
    $this->SetFont('helvetica', 'B', 8);
    $this->SetY(-15);
    $this->Cell(184, 5, utf8_decode('Página ') . $this->PageNo() . ' / {nb}', 0, 0, 'L');
    $this->Cell(93, 5, date('d/m/Y | g:i:a'), 00, 1, 'R');
    $this->Line(10, 287, 200, 287);
    $this->Cell(0, 5, utf8_decode("ASO. TIERRA FÉRTIL © Todos los derechos reservados."), 0, 0, "C");
  }


  // --------------------METODO PARA ADAPTAR LAS CELDAS------------------------------
  var $widths;
  var $aligns;

  function SetWidths($w)
  {
    //Set the array of column widths
    $this->widths = $w;
  }

  function SetAligns($a)
  {
    //Set the array of column alignments
    $this->aligns = $a;
  }

  function Row($data, $setX) //yo modifique el script a  mi conveniencia :D
  {
    //Calculate the height of the row
    $nb = 0;
    for ($i = 0; $i < count($data); $i++) {
      $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
    }

    $h = 8 * $nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h, $setX);
    //Draw the cells of the row
    for ($i = 0; $i < count($data); $i++) {
      $w = $this->widths[$i];
      $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'C';
      //Save the current position
      $x = $this->GetX();
      $y = $this->GetY();
      //Draw the border
      $this->Rect($x, $y, $w, $h, 'DF');
      //Print the text
      $this->MultiCell($w, 8, $data[$i], 0, $a);
      //Put the position to the right of the cell
      $this->SetXY($x + $w, $y);
    }
    //Go to the next line
    $this->Ln($h);
  }

  function CheckPageBreak($h, $setX)
  {
    //If the height h would cause an overflow, add a new page immediately
    if ($this->GetY() + $h > $this->PageBreakTrigger) {
      $this->AddPage($this->CurOrientation);
      $this->SetX($setX);

      //volvemos a definir el  encabezado cuando se crea una nueva pagina
      $this->SetFillColor(209, 224, 224);
      $this->SetDrawColor(255, 255, 255);
      $this->SetFont('Helvetica', 'B', 9);
      $this->Cell(10, 10, utf8_decode('ID°'), 0, 0, 'C', 1);
      $this->Cell(40, 10, utf8_decode('FECHA INSPECCIÓN'), 0, 0, 'C', 1);
      $this->Cell(20, 10, utf8_decode('SEMANA'), 0, 0, 'C', 1);
      $this->Cell(25, 10, utf8_decode('H. LLEGADA'), 0, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('CONTENEDOR'), 0, 0, 'C', 1);
      $this->Cell(45, 10, utf8_decode('CHOFER'), 0, 0, 'C', 1);
      $this->Cell(45, 10, utf8_decode('ACOPIO'), 0, 0, 'C', 1);
      $this->Cell(25, 10, utf8_decode('TP CAJA'), 0, 0, 'C', 1);
      $this->Cell(35, 10, utf8_decode('TP CONTENEDOR'), 0, 1, 'C', 1);
      $this->SetFont('Arial', '', 10);
      // Este es el color de los campos por debajo de los encabezados.
      $this->SetFillColor(255, 255, 255);
      $this->SetDrawColor(65, 61, 61);
    }

    if ($setX == 100) {
      $this->SetX(100);
    } else {
      $this->SetX($setX);
    }
  }

  function NbLines($w, $txt)
  {
    //Computes the number of lines a MultiCell of width w will take
    $cw = &$this->CurrentFont['cw'];
    if ($w == 0) {
      $w = $this->w - $this->rMargin - $this->x;
    }

    $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
    $s = str_replace("\r", '', $txt);
    $nb = strlen($s);
    if ($nb > 0 and $s[$nb - 1] == "\n") {
      $nb--;
    }

    $sep = -1;
    $i = 0;
    $j = 0;
    $l = 0;
    $nl = 1;
    while ($i < $nb) {
      $c = $s[$i];
      if ($c == "\n") {
        $i++;
        $sep = -1;
        $j = $i;
        $l = 0;
        $nl++;
        continue;
      }
      if ($c == ' ') {
        $sep = $i;
      }

      $l += $cw[$c];
      if ($l > $wmax) {
        if ($sep == -1) {
          if ($i == $j) {
            $i++;
          }
        } else {
          $i = $sep + 1;
        }

        $sep = -1;
        $j = $i;
        $l = 0;
        $nl++;
      } else {
        $i++;
      }
    }
    return $nl;
  }
}
// -------------------------FIN - METODO PARA ADAPTAR LAS CELDAS---------------------------------

// -----------CONEXION A BASE DE DATOS Y CONSULTA -------------------
$filtro_fecha_inicial = $_GET["f_ini"];
$filtro_fecha_final = $_GET["f_fin"];
$conexion = conexionBd();
$sql = $conexion->query("SELECT * FROM vista_registro_llegada WHERE fecha_inspeccion >= '$filtro_fecha_inicial' && fecha_inspeccion <= '$filtro_fecha_final';");
$data = mysqli_fetch_all($sql);
// -----------FIN - CONEXION A BASE DE DATOS Y CONSULTA -------------

// Esto es configuracion del documento:
$pdf = new PDF('L', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(15);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);
// FIN - Configuracion del documento

// ENCABEZADO DE TABLA HOJA 1
$pdf->SetX(11);
$pdf->SetFillColor(209, 224, 224);
$pdf->SetDrawColor(255, 255, 255);

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(10, 10, utf8_decode('N°'), 0, 0, 'C', 1);
$pdf->Cell(40, 10, utf8_decode('FECHA INSPECCIÓN'), 0, 0, 'C', 1);
$pdf->Cell(20, 10, utf8_decode('SEMANA'), 0, 0, 'C', 1);
$pdf->Cell(25, 10, utf8_decode('H. LLEGADA'), 0, 0, 'C', 1);
$pdf->Cell(30, 10, utf8_decode('CONTENEDOR'), 0, 0, 'C', 1);
$pdf->Cell(45, 10, utf8_decode('CHOFER'), 0, 0, 'C', 1);
$pdf->Cell(45, 10, utf8_decode('ACOPIO'), 0, 0, 'C', 1);
$pdf->Cell(25, 10, utf8_decode('TP CAJA'), 0, 0, 'C', 1);
$pdf->Cell(35, 10, utf8_decode('TP CONTENEDOR'), 0, 1, 'C', 1);
// FIN - ENCABEZADO DE TABLA HOJA 1

// Este es el color de los campos por debajo de los encabezados.
$pdf->SetFillColor(255, 255, 255);
$pdf->SetDrawColor(65, 61, 61);
$pdf->SetFont('Arial', '', 10);

// Aqui se hace la impresin de los datos de la BD, donde enla linea que sigue se hace el ingreso del ancho de columnas.
// estos deben de coincidir con los anchos dados a los encabezados para que salgan bien todos.
$pdf->SetWidths(array(10, 40, 20, 25, 30, 45, 45, 25, 35));
for ($i = 0; $i < count($data); $i++) {
  $fila = array(
    $i + 1,
    $data[$i]['1'],
    $data[$i]['2'],
    $data[$i]['3'],
    $data[$i]['4'],
    $data[$i]['5'],
    $data[$i]['6'],
    $data[$i]['7'],
    $data[$i]['8']
  );
  $pdf->Row($fila, 11);
}

$pdf->Output();
