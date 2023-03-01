
<?php
function cargar_dg()
{
    if (!empty($_GET["id_eva"])) {
        $id = $_GET["id_eva"];
        $conexion = conexionBd();
        $sql = $conexion->query("SELECT DISTINCT *
        FROM evaluaciones  where id=$id;");
        return $sql;
    } else {   
        $validacion = false;
        return $validacion;
    }
}

function id_max()
{
	$conexion = conexionBd();
	$sql = $conexion->query("SELECT MAX(id) AS id FROM evaluaciones;");
	return $sql;
}

function cargar_asepcias()
{
    if (!empty($_GET["id_eva"])) {
        $id = $_GET["id_eva"];
        $conexion = conexionBd();
        $sql = $conexion->query("SELECT DISTINCT *
        FROM asepcias where id_eva=$id;");
        return $sql;
    } else {   
        $validacion = false;
        return $validacion;
    }
}

function cargar_gc1(){
    if (!empty($_GET["id_eva"])) {
        $id = $_GET["id_eva"];
        $conexion = conexionBd();
        $sql = $conexion->query("SELECT DISTINCT *
        FROM grado_calibre where id_eva=$id;");
        return $sql;
    } else {   
        $validacion = false;
        return $validacion;
    }
}

function cargar_gc2(){
    if (!empty($_GET["id_eva"])) {
        $id = $_GET["id_eva"];
        $conexion = conexionBd();
        $sql = $conexion->query("SELECT DISTINCT *
        FROM grado_calibre_op where id_eva=$id;");
        return $sql;
    } else {   
        $validacion = false;
        return $validacion;
    }
}

function cargar_ld1(){
    if (!empty($_GET["id_eva"])) {
        $id = $_GET["id_eva"];
        $conexion = conexionBd();
        $sql = $conexion->query("SELECT DISTINCT *
        FROM largo_dedo where id_eva=$id;");
        return $sql;
    } else {   
        $validacion = false;
        return $validacion;
    }
}

function cargar_ld2(){
    if (!empty($_GET["id_eva"])) {
        $id = $_GET["id_eva"];
        $conexion = conexionBd();
        $sql = $conexion->query("SELECT DISTINCT *
        FROM largo_dedo_op where id_eva=$id;");
        return $sql;
    } else {   
        $validacion = false;
        return $validacion;
    }
}

?>