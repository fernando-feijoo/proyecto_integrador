<?php

function consultaID_entidadInspeccionContenedor() {
    try {
        $conexion = conexionBd();
        
        $sql = "SELECT COALESCE(MAX(id), 11) AS id_tablaInspeccionContenedor FROM inspeccion_contenedor";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = null;
        $conn = null;
        echo "Consulta id entidad InspConte... BD MODELO, " . $rs['id_tablaInspeccionContenedor'];
    } catch (PDOException $e) {
        echo "Error al tratar de obtener id entidad InspeccionContenedor BD MODELO: " . $e->getMessage();
    }
    return $rs;
}





