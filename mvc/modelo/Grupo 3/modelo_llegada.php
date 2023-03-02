<?php
$conexion = conexionBd();

function datos_lista_caja()
{
	global $conexion;
	$sql = $conexion->query("SELECT * FROM tipo_cajas WHERE estado = 'ACTIVO';");
	return $sql;
}

function datos_lista_vehiculo()
{
	global $conexion;
	$sql = $conexion->query("SELECT id, placa, marca FROM vehiculo WHERE estado = 'ACTIVO';");
	return $sql;
}

function datos_lista_chofer()
{
	global $conexion;
	$sql = $conexion->query("SELECT id, cedula, CONCAT(nombre,' ',apellido) AS nombres FROM chofer WHERE estado = 'ACTIVO' && nombre != 'N/A';");
	return $sql;
}

function cargar_datos()
{
	if (!empty($_GET["id_listado"])) {
		$id = $_GET["id_listado"];
		global $conexion;
		$sql = $conexion->query("SELECT * FROM registro_llegada WHERE id = $id;");
		return $sql;
	} else {
		$validacion = false;
		return $validacion;
	}
}

function numero_dato_garita()
{
	global $conexion;
	$sql = $conexion->query("SELECT MAX(id) AS id FROM registro_llegada;");
	return $sql;
}

function guardar_datos_llegada($id_listado, $fecha_insp, $semana, $fecha_hora_salida, $hora_llegada, $cupo, $contenedor, $nombre_acopio, $candados_llegada, $tipo_contenedor_eleccion, $id_tipo_caja, $id_vehiculo, $id_chofer)
{
	global $conexion;

	$sql_consulta = "SELECT `insertarDatosLlegada` ('$id_listado','$fecha_insp','$semana','$fecha_hora_salida','$hora_llegada','$cupo','$contenedor','$nombre_acopio','$candados_llegada','$tipo_contenedor_eleccion','$id_tipo_caja','$id_vehiculo','$id_chofer');";

	$sql = $conexion->query($sql_consulta);

	if (($sql == TRUE || !empty($_POST["btn-guardar"])) || ($sql == TRUE || !empty($_POST["btn-actualizar"]))) {
		if (!empty($_POST["btn-guardar"])) {
			echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos guardados correctamente!
    </div>";
		} else {
			// LINEA CLAVE PARA CAMBIAR DE VISTA AL GUARDAR CON UN ACTUALIZAR.
			echo '<meta http-equiv="refresh" content="5; url=./vista_listado_garita_g3.php">';
			echo "<div class='alert alert-info text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos actualizados correctamente! Sera redirigido a la lista...
    </div>";
		}
	} else {
		echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Error al guardar los datos, vuelva a intentar y recargue la pagina!
    </div>";
	}
}
