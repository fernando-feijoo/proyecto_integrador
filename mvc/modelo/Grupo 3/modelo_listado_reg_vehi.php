<?php
$conexion = conexionBd();

$cantidad_por_pagina = 5;

$sql_total = $conexion->query("SELECT COUNT(*) AS total FROM vehiculo WHERE estado = 'ACTIVO';");
$total = $sql_total->fetch_assoc()['total'];
$num_pags = ceil($total / $cantidad_por_pagina);

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $cantidad_por_pagina;

$sql_lista_vehi = $conexion->query("SELECT * FROM vehiculo WHERE estado = 'ACTIVO' LIMIT $inicio, $cantidad_por_pagina;");