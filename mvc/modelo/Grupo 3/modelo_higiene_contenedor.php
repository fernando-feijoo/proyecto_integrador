<?php
$conexion = conexionBd();
function cargar_datos_higiene()
{
	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		global $conexion;
		$sql = $conexion->query("SELECT * FROM higiene_contenedor WHERE id_cont_export = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}

function cargar_observacion_higiene()
{
	if (!empty($_GET["id_contExpo"])) {
		$id = $_GET["id_contExpo"];
		global $conexion;
		$sql = $conexion->query("SELECT obser_hig_contenedor FROM cont_export WHERE id = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}

function guardar_datos_higiene($id, $opcion, $id_contenedor_export, $id_verificar_lugar)
{
	global $conexion;
	$sql_guardado_higiene = "SELECT `insertarDatosHigiene` ('$id','$opcion','$id_contenedor_export','$id_verificar_lugar');";
	$sql = $conexion->query($sql_guardado_higiene);
	if ($conexion->query($sql_guardado_higiene) == TRUE) {
?>
		<script>
			console.log("Guardado Correcto - HIGIENE CONTENEDOR")
		</script>
	<?php
	}
}

function insertar_comentario_higiene($obs_higiene, $id)
{
	global $conexion;
	$sql_guardado_obs = "UPDATE `cont_export` SET obser_hig_contenedor = '$obs_higiene' WHERE id = '$id';";
	$sql_nuevo = $conexion->query($sql_guardado_obs);
	?>
	<script>
		console.log("Guardado Correcto - HIGIENE CONTENEDOR + OBSERVACION")
	</script>
<?php
}
