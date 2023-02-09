<?php
if (!empty($_POST["btn-guardar"]) || !empty($_POST["btn-actualizar"])) {
	if (!empty($_POST["inlineRadioOptions_gg3"])) {
		$id_listado = $_SESSION["id_listado"];
		$fecha_insp = $_POST["fecha_inspeccion_gg3"];
		$semana = $_POST["semana_gg3"];
		$fecha_hora_salida = date("Y-m-d H:i:s", strtotime($_POST["fecha_hora_salida_gg3"]));
		$hora_llegada = $_POST["hora_llegada_gg3"];
		$cupo = $_POST["cupo_gg3"];
		$contenedor = strtoupper($_POST["contenedor_gg3"]);
		$nombre_acopio = strtoupper($_POST["nombre_copio_gg3"]);
		$candados_llegada = strtoupper($_POST["candados_llegada_gg3"]);

		$tipo_contenedor_eleccion = $_POST["inlineRadioOptions_gg3"];

		$id_tipo_caja = $_POST["tipo_caja_gg3"];
		$id_vehiculo = $_POST["placa_gg3"];
		$id_chofer = $_POST["chofer_gg3"];

		// Para visualizar en pantalla de trabajo, prueba.
		// echo $fecha_insp. ' <br> ' .$semana. ' <br> ' .$fecha_hora_salida. ' <br> ' .$hora_llegada. ' <br> ' .$cupo. ' <br> ' .$contenedor. ' <br> ' .$nombre_acopio. ' <br> ' .$candados_llegada. ' <br> ' .$tipo_contenedor_eleccion. ' <br> ' .$id_tipo_caja. ' <br> ' .$id_vehiculo. ' <br> ' .$id_chofer;
		$conexion = conexionBd();

		$sql_consulta = "SELECT `insertarDatosLlegada` ($id_listado,'$fecha_insp','$semana','$fecha_hora_salida','$hora_llegada','$cupo','$contenedor','$nombre_acopio','$candados_llegada','$tipo_contenedor_eleccion','$id_tipo_caja','$id_vehiculo','$id_chofer');";

		$sql = $conexion->query($sql_consulta);

		if (($conexion->query($sql_consulta) === TRUE || !empty($_POST["btn-guardar"])) || ($conexion->query($sql_consulta) === TRUE || !empty($_POST["btn-actualizar"]))) {
			if (!empty($_POST["btn-guardar"])) {
				echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos guardados correctamente!
    </div>";
			} else {
				echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Datos actualizados correctamente!
    </div>";
			}
		} else {
			echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Error al guardar los datos, vuelva a intentar y recargue la pagina!
    </div>";
		}
	} else {
		echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Registre todos los datos necesarios, verifique!
    </div>";
	}
}
