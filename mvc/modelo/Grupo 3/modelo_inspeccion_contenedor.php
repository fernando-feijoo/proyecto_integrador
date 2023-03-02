<?php
$conexion = conexionBd();
function cargar_dato_inpeccion()
{
	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		global $conexion;
		$sql = $conexion->query("SELECT * FROM inspeccion_contenedor WHERE id_cont_export = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}

function cargar_observacion_inspeccion()
{
	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		global $conexion;
		$sql = $conexion->query("SELECT obser_ins_contenedor FROM cont_export WHERE id = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}

function guardar_datos_inspeccion($id, $verificacion, $id_contenedor_export, $id_verificar_lugar)
{
	global $conexion;
	$sql_guardado_inspeccion = "SELECT `insertarDatosInspeccion` ('$id','$verificacion','$id_contenedor_export','$id_verificar_lugar');";
	$sql = $conexion->query($sql_guardado_inspeccion);

	if ($conexion->query($sql_guardado_inspeccion) == TRUE) {
?>
		<script>
			console.log("Guardado Correcto - INSPECCION CONTENEDOR")
		</script>
	<?php
	}
}

function insertar_comentario_contenedor($obs_inspeccion, $id)
{
	global $conexion;
	$sql_guardado_obs = "UPDATE `cont_export` SET obser_ins_contenedor = '$obs_inspeccion' WHERE id = '$id';";
	$sql_nuevo = $conexion->query($sql_guardado_obs);
	?>
	<script>
		console.log("Guardado Correcto - INSPECCION CONTENEDOR + OBSERVACION")
	</script>
<?php
}
