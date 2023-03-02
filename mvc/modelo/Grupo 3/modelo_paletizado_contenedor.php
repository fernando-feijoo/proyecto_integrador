<?php
$conexion = conexionBd();

function datos_lista_cajas()
{
	global $conexion;
	$sql = $conexion->query("SELECT * FROM cantidad_cajas;");
	return $sql;
}

function datos_lista_firmantes()
{
	global $conexion;
	$sql = $conexion->query("SELECT id, CONCAT(nombre,' ',apellido) AS nombres FROM firmantes;");
	return $sql;
}

function datos_lista_chofer()
{
	global $conexion;
	$sql = $conexion->query("SELECT id, CONCAT(nombre,' ',apellido) AS nombres FROM chofer;");
	return $sql;
}

function cargar_datos_paletizado()
{
	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		global $conexion;
		$sql = $conexion->query("SELECT * FROM control_pallet WHERE id_cont_export = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}

function cargar_observacion_general()
{
	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		global $conexion;
		$sql = $conexion->query("SELECT obser_general FROM cont_export WHERE id = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}

function cargar_firmas_contenedor()
{
	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		global $conexion;
		$sql = $conexion->query("SELECT 
		fra.id_firmante AS firmante_uno, fef.id_firmante AS firmante_dos, fvc.id_firmante AS firmante_tres, ce.id_firma_chofer_contenedor AS firmante_cuatro 
		FROM cont_export ce
		INNER JOIN firma_rep_acopio fra ON fra.id = ce.id_firma_resp_acopio
		INNER JOIN firma_eval_fruta fef ON fef.id = ce.id_firma_eval_fruta
		INNER JOIN firma_verif_contenedor fvc ON fvc.id = ce.id_firma_verif_contenedor
		WHERE ce.id = '$id';");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}

function guardar_datos_pallet($id, $valor, $id_contenedor_export, $id_cantidad_cajas)
{
	global $conexion;
	$sql_guardado_paletizado = "SELECT `insertarDatosPallet` ('$id','$valor','$id_contenedor_export','$id_cantidad_cajas');";
	$sql = $conexion->query($sql_guardado_paletizado);

	if ($conexion->query($sql_guardado_paletizado) == TRUE) {
?>
		<script>
			console.log("Guardado Correcto - PALETIZADO CONTENEDOR")
		</script>
	<?php
	}
}

function insertar_comentario_general($obs_general, $id)
{
	global $conexion;
	$sql_guardado_obs = "UPDATE `cont_export` SET obser_general = '$obs_general' WHERE id = '$id';";
	$sql_nuevo = $conexion->query($sql_guardado_obs);
	if ($sql_nuevo == TRUE) {
	?>
		<script>
			console.log("Guardado Correcto - PALLET CONTENEDOR + OBSERVACION")
		</script>
	<?php
	}
}

function guardar_firmas_uno($id, $fecha, $id_firma)
{
	global $conexion;
	$sql_guardado_firma_tabla = "SELECT insertarFirmaResAcopio ('$id','$fecha','$id_firma');";
	$sql_guardado_firmante = "UPDATE `cont_export` SET id_firma_resp_acopio = '$id' WHERE id = '$id';";
	$sql_firma = $conexion->query($sql_guardado_firma_tabla);
	$sql_firmante = $conexion->query($sql_guardado_firmante);
	if ($sql_firma == TRUE && $sql_firmante == TRUE) {
	?>
		<script>
			console.log("Guardado Correcto - PALLET CONTENEDOR + FIRMA 1")
		</script>
	<?php
	}
}

function guardar_firmas_dos($id, $fecha, $id_firma)
{
	global $conexion;
	$sql_guardado_firma_tabla = "SELECT insertarFirmaEvalFruta ('$id','$fecha','$id_firma');";
	$sql_guardado_firmante = "UPDATE `cont_export` SET id_firma_eval_fruta = '$id' WHERE id = '$id';";
	$sql_firma = $conexion->query($sql_guardado_firma_tabla);
	$sql_firmante = $conexion->query($sql_guardado_firmante);
	if ($sql_firma == TRUE && $sql_firmante == TRUE) {
	?>
		<script>
			console.log("Guardado Correcto - PALLET CONTENEDOR + FIRMA 2")
		</script>
	<?php
	}
}

function guardar_firmas_tres($id, $fecha, $id_firma)
{
	global $conexion;
	$sql_guardado_firma_tabla = "SELECT insertarFirmaVerCont ('$id','$fecha','$id_firma');";
	$sql_guardado_firmante = "UPDATE `cont_export` SET id_firma_verif_contenedor = '$id' WHERE id = '$id';";
	$sql_firma = $conexion->query($sql_guardado_firma_tabla);
	$sql_firmante = $conexion->query($sql_guardado_firmante);
	if ($sql_firma == TRUE && $sql_firmante == TRUE) {
	?>
		<script>
			console.log("Guardado Correcto - PALLET CONTENEDOR + FIRMA 3")
		</script>
	<?php
	}
}

function guardar_firmas_chofer($id, $id_firma)
{
	global $conexion;
	$sql_guardado_firmante = "UPDATE `cont_export` SET id_firma_chofer_contenedor = '$id_firma' WHERE id = '$id';";
	$sql_firmante = $conexion->query($sql_guardado_firmante);
	if ($sql_firmante == TRUE) {
	?>
		<script>
			console.log("Guardado Correcto - PALLET CONTENEDOR + FIRMA 4")
		</script>
<?php
	}
}
