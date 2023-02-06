<?php
include_once "./../modelo/conexion_bd.php";
$conexion = conexionBd();

$cantidad_por_pagina = 5;

if ((empty($_POST["button-busqueda"]) && empty($_SESSION["sesion_busqueda"])) || empty($_GET["busqueda"])) {
	$sql_total = $conexion->query("SELECT COUNT(*) AS total FROM vista_registro_llegada;");
	$total = $sql_total->fetch_assoc()['total'];
	$num_pags = ceil($total / $cantidad_por_pagina);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$inicio = ($pagina - 1) * $cantidad_por_pagina;

	$sql = $conexion->query("SELECT * FROM vista_registro_llegada LIMIT $inicio, $cantidad_por_pagina;");
	unset($_SESSION["sesion_busqueda"]);
} else {
	// alerta aun hay que tabajarla.
	if (empty($_POST["busqueda_contenedores"]) && empty($_SESSION["sesion_busqueda"])) {
		echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
        ¡Ingrese los datos a buscar ademas del filtro!
    </div>";
		$filtro_busqueda = "tipo_de_contenedor";
		$valor_busqueda = "";
	}
	if (!empty($_POST["seleccionBusquedaContenedores"]) || !empty($_POST["busqueda_contenedores"])) {
		$filtro_busqueda = $_POST["seleccionBusquedaContenedores"];
		$valor_busqueda = $_POST["busqueda_Contenedores"];
	} elseif (!empty($_SESSION["sesion_busqueda"])) {
		$filtro_busqueda = $_SESSION["sesion_filtro"];
		$valor_busqueda = $_SESSION["sesion_busqueda"];
	}

	$_SESSION["sesion_filtro"] = $filtro_busqueda;
	$_SESSION["sesion_busqueda"] = $valor_busqueda;

	$sql_total = $conexion->query("SELECT COUNT(*) AS total FROM vista_registro_llegada WHERE $filtro_busqueda = '$valor_busqueda';");
	$total = $sql_total->fetch_assoc()['total'];
	$num_pags = ceil($total / $cantidad_por_pagina);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$inicio = ($pagina - 1) * $cantidad_por_pagina;

	$sql = $conexion->query("SELECT * FROM vista_registro_llegada WHERE $filtro_busqueda = '$valor_busqueda' LIMIT $inicio, $cantidad_por_pagina;");
}
