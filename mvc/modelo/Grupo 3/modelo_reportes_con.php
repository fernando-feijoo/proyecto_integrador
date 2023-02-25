<?php
$conexion = conexionBd();

$cantidad_por_pagina = 5;

if ((empty($_POST["button-busqueda-reportes"]) && (empty($_SESSION["sesion_fecha_inicial"]) || empty($_SESSION["sesion_fecha_final"]))) || empty($_GET["busqueda"])) {
	$sql_total = $conexion->query("SELECT COUNT(*) AS total FROM vista_registro_contenedores;");
	$total = $sql_total->fetch_assoc()['total'];
	$num_pags = ceil($total / $cantidad_por_pagina);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$inicio = ($pagina - 1) * $cantidad_por_pagina;

	$sql = $conexion->query("SELECT * FROM vista_registro_contenedores LIMIT $inicio, $cantidad_por_pagina;");
	unset($_SESSION["sesion_fecha_inicial"]);
	unset($_SESSION["sesion_fecha_final"]);
} else {
	if ((empty($_POST["busqueda_reporte_inicio"]) || empty($_POST["busqueda_reporte_final"])) && empty($_SESSION["sesion_fecha_final"])) {
		echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Ingrese las fechas a buscar, Desde y Hasta!
        </div>";
		$filtro_fecha_final = '';
		$filtro_fecha_inicial = '';
	}
	if (!empty($_POST["busqueda_reporte_final"]) && !empty($_POST["busqueda_reporte_inicio"])) {
		$filtro_fecha_inicial = $_POST["busqueda_reporte_inicio"];
		$filtro_fecha_final = $_POST["busqueda_reporte_final"];
	} elseif (!empty($_SESSION["sesion_fecha_inicial"]) && !empty($_SESSION["sesion_fecha_final"])) {
		$filtro_fecha_inicial = $_SESSION["sesion_fecha_inicial"];
		$filtro_fecha_final = $_SESSION["sesion_fecha_final"];
	}

	$_SESSION["sesion_fecha_inicial"] = $filtro_fecha_inicial;
	$_SESSION["sesion_fecha_final"] = $filtro_fecha_final;

	$sql_total = $conexion->query("SELECT COUNT(*) AS total FROM vista_registro_contenedores WHERE fecha_inspeccion >= '$filtro_fecha_inicial' && fecha_inspeccion <= '$filtro_fecha_final';");
	$total = $sql_total->fetch_assoc()['total'];
	$num_pags = ceil($total / $cantidad_por_pagina);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$inicio = ($pagina - 1) * $cantidad_por_pagina;

	$sql = $conexion->query("SELECT * FROM vista_registro_contenedores WHERE fecha_inspeccion >= '$filtro_fecha_inicial' && fecha_inspeccion <= '$filtro_fecha_final' LIMIT $inicio, $cantidad_por_pagina;");
}
