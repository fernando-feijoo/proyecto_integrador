<?php
$conexion = conexionBd();

$cantidad_por_pagina = 5;

$sql_total = $conexion->query("SELECT COUNT(*) AS total FROM chofer WHERE estado = 'ACTIVO' AND nombre != 'N/A';");
$total = $sql_total->fetch_assoc()['total'];
$num_pags = ceil($total / $cantidad_por_pagina);

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $cantidad_por_pagina;

$sql_lista_chof = $conexion->query("SELECT * FROM chofer WHERE estado = 'ACTIVO' AND nombre != 'N/A' ORDER BY apellido ASC LIMIT $inicio, $cantidad_por_pagina;");
