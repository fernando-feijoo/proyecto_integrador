<?php
if (!empty($_POST["btn-guardar"]) || !empty($_POST["btn-actualizar"])) {
	if ((!empty($_POST["inlineRadioOptions_gg3"])) && (($_POST["tipo_caja_gg3"] != 'Seleccione') && ($_POST["placa_gg3"] != 'Seleccione') && ($_POST["chofer_gg3"] != 'Seleccione'))) {
		if (!empty($_POST["btn-guardar"])) {
			$id_listado = $_SESSION["id_conteo"];
			unset($_SESSION["id_listado"]);
		} else if (!empty($_POST["btn-actualizar"])) {
			$id_listado = $_SESSION["id_listado"];
			unset($_SESSION["id_conteo"]);
		}
		$fecha_insp = $_POST["fecha_inspeccion_gg3"];
		$semana = $_POST["semana_gg3"];
		$fecha_hora_salida = date("Y-m-d H:i:s", strtotime($_POST["fecha_hora_salida_gg3"]));
		$hora_llegada = $_POST["hora_llegada_gg3"];
		$cupo = $_POST["cupo_gg3"];
		$contenedor = strtoupper($_POST["contenedor_gg3"]);
		$nombre_acopio = mb_strtoupper($_POST["nombre_copio_gg3"], 'UTF-8');
		$candados_llegada = strtoupper($_POST["candados_llegada_gg3"]);

		$tipo_contenedor_eleccion = $_POST["inlineRadioOptions_gg3"];

		$id_tipo_caja = $_POST["tipo_caja_gg3"];
		$id_vehiculo = $_POST["placa_gg3"];
		$id_chofer = $_POST["chofer_gg3"];
		
		guardar_datos_llegada($id_listado,$fecha_insp,$semana,$fecha_hora_salida,$hora_llegada,$cupo,$contenedor,$nombre_acopio,$candados_llegada,$tipo_contenedor_eleccion,$id_tipo_caja,$id_vehiculo,$id_chofer);

	} else {
		echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Registre todos los datos necesarios \" * \", verifique!
    </div>";
	}
}
