<?php

$conexion = conexionBd();

$cantidad_por_pagina = 5;

if ((empty($_POST["button-busqueda"]) && empty($_SESSION["sesion_busqueda"])) || empty($_GET["busqueda"])) {
	$sql_total = $conexion->query("SELECT COUNT(*) AS total FROM vista_registro_contenedores;");
	$total = $sql_total->fetch_assoc()['total'];
	$num_pags = ceil($total / $cantidad_por_pagina);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$inicio = ($pagina - 1) * $cantidad_por_pagina;

	$sql = $conexion->query("SELECT * FROM vista_registro_contenedores LIMIT $inicio, $cantidad_por_pagina;");
	unset($_SESSION["sesion_busqueda"]);
} else {
	if (empty($_POST["busqueda_contenedor"]) && empty($_SESSION["sesion_busqueda"])) {
		echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Ingrese los datos a buscar ademas del filtro!
    </div>";
		$filtro_busqueda = "nombre_acopio";
		$valor_busqueda = "";
	}
	if (!empty($_POST["seleccionContenedor"]) || !empty($_POST["busqueda_contenedor"])) {
		$filtro_busqueda = $_POST["seleccionContenedor"];
		$valor_busqueda = $_POST["busqueda_contenedor"];
	} elseif (!empty($_SESSION["sesion_busqueda"])) {
		$filtro_busqueda = $_SESSION["sesion_filtro"];
		$valor_busqueda = $_SESSION["sesion_busqueda"];
	}

	$sql_total = $conexion->query("SELECT COUNT(*) AS total FROM vista_registro_contenedores WHERE $filtro_busqueda = '$valor_busqueda';");
	$total = $sql_total->fetch_assoc()['total'];
	$num_pags = ceil($total / $cantidad_por_pagina);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$inicio = ($pagina - 1) * $cantidad_por_pagina;

	$sql = $conexion->query("SELECT * FROM vista_registro_contenedores WHERE $filtro_busqueda = '$valor_busqueda' LIMIT $inicio, $cantidad_por_pagina;");
}
