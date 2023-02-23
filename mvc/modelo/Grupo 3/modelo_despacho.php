<?php
$conexion = conexionBd();
function datos_lista_paletizador()
{
	global $conexion;
	$sql = $conexion->query("SELECT id, cedula, CONCAT(nombre,' ',apellido) AS nombres FROM paletizadores;");
	return $sql;
}

function carga_datos_despacho()
{
	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		global $conexion;
		$sql = $conexion->query("SELECT * FROM datos_despacho WHERE id_cont_export = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}
function guardar_datos_despacho($id, $filtro_rb, $termografo_rb, $termografo_num, $sello_adhesivo, $sello_verificador, $sello_exp_cand, $fecha_hora_salida, $sello_exp_cable, $compania_transporte, $sello_nave, $vapor, $destino, $paletizadores, $total_viajar, $cajas, $cantidad_pallet, $observaciones, $id_cont_export)
{
	global $conexion;

	$sql_consulta = "SELECT insertarDatosDespacho ('$id','$filtro_rb','$termografo_rb','$termografo_num','$sello_adhesivo','$sello_verificador','$sello_exp_cand','$fecha_hora_salida','$sello_exp_cable','$compania_transporte','$sello_nave','$vapor','$destino','$paletizadores','$total_viajar','$cajas','$cantidad_pallet','$observaciones','$id_cont_export');";
	$sql = $conexion->query($sql_consulta);
	if ($conexion->query($sql_consulta) == TRUE) {
?>
		<script>
			console.log("Guardado Correcto - DESPACHO CONTENEDOR")
		</script>
<?php
	}
}
