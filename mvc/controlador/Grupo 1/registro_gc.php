<?php

if (!empty($_POST["guardar_eva"]) || !empty($_POST["actualizar_eva"])) {

    if (!empty($_POST["guardar_eva"])) {
        $id_eva = $_SESSION["id_conteo"];
        unset($_SESSION["id_eva"]);
    } else if (!empty($_POST["actualizar_eva"])) {
        $id_eva = $_SESSION["id_eva"];
        unset($_SESSION["id_conteo"]);
    }

     $id=$id_eva;
    
    // Solo primera tabla
    
    $sup36=($_POST["sup36"] == 0) ? " " :$_POST["sup36"];
    $sup37=($_POST["sup37"] == 0) ? " " :$_POST["sup37"];
    $sup38=($_POST["sup38"] == 0) ? " " :$_POST["sup38"];
    $sup39=($_POST["sup39"] == 0) ? " " :$_POST["sup39"];
    $sup40=($_POST["sup40"] == 0) ? " " :$_POST["sup40"];
    $sup41=($_POST["sup41"] == 0) ? " " :$_POST["sup41"];
    $sup42=($_POST["sup42"] == 0) ? " " :$_POST["sup42"];
    $sup43=($_POST["sup43"] == 0) ? " " :$_POST["sup43"];   
    $sup44=($_POST["sup44"] == 0) ? " " :$_POST["sup44"];
    $sup45=($_POST["sup45"] == 0) ? " " :$_POST["sup45"];
    $sup46=($_POST["sup46"] == 0) ? " " :$_POST["sup46"];
    $sup47=($_POST["sup47"] == 0) ? " " :$_POST["sup47"];
    $sup48=($_POST["sup48"] == 0) ? " " :$_POST["sup48"];
    $sup49=($_POST["sup49"] == 0) ? " " :$_POST["sup49"];
    $sup50=($_POST["sup50"] == 0) ? " " :$_POST["sup50"];
    $sup51=($_POST["sup51"] == 0) ? " " :$_POST["sup51"];
    $sup52=($_POST["sup52"] == 0) ? " " :$_POST["sup52"];
    $total_sup = $_POST["total_sup"];

    // Solo la Segunda Tabla

    $inf36=($_POST["inf36"] == 0) ? " " : $_POST["inf36"];
    $inf37=($_POST["inf37"] == 0) ? " " : $_POST["inf37"];
    $inf38=($_POST["inf38"] == 0) ? " " : $_POST["inf38"];
    $inf39=($_POST["inf39"] == 0) ? " " : $_POST["inf39"];
    $inf40=($_POST["inf40"] == 0) ? " " : $_POST["inf40"];
    $inf41=($_POST["inf41"] == 0) ? " " : $_POST["inf41"];
    $inf42=($_POST["inf42"] == 0) ? " " : $_POST["inf42"];
    $inf43=($_POST["inf43"] == 0) ? " " : $_POST["inf43"];   
    $inf44=($_POST["inf44"] == 0) ? " " : $_POST["inf44"];
    $inf45=($_POST["inf45"] == 0) ? " " : $_POST["inf45"];
    $inf46=($_POST["inf46"] == 0) ? " " : $_POST["inf46"];
    $inf47=($_POST["inf47"] == 0) ? " " : $_POST["inf47"];
    $inf48=($_POST["inf48"] == 0) ? " " : $_POST["inf48"];
    $inf49=($_POST["inf49"] == 0) ? " " : $_POST["inf49"];
    $inf50=($_POST["inf50"] == 0) ? " " : $_POST["inf50"];
    $inf51=($_POST["inf51"] == 0) ? " " : $_POST["inf51"];
    $inf52=($_POST["inf52"] == 0) ? " " : $_POST["inf52"];
    $total_inf = $_POST["total_inf"];
    $prom= $_POST["promedio_inf"];

    $conexion = conexionBd();

    // $sql_gc_1 = $conexion->query("INSERT INTO grado_calibre
    // (id, d36, d37, d38, d39, d40, d41, d42, d43, d44, d45, d46, d47, d48, d49, d50, d51, d52, total_gc, id_eva)
    // VALUES ($id,'$sup36','$sup37','$sup38','$sup39','$sup40','$sup41','$sup42','$sup43','$sup44','$sup45','$sup46','$sup47','$sup48','$sup49',
    // '$sup50','$sup51','$sup52',$total_sup,$id_eva)");

    $sql_gc_1 = $conexion->query("SELECT insertarGradoCalibre($id,'$sup36','$sup37','$sup38','$sup39','$sup40','$sup41','$sup42','$sup43','$sup44','$sup45','$sup46','$sup47','$sup48','$sup49',
   '$sup50','$sup51','$sup52',$total_sup,$id_eva);");

    $sql_gc_2 = $conexion->query("SELECT insertarGradoCalibreOp($id,'$inf36','$inf37','$inf38','$inf39','$inf40','$inf41','$inf42','$inf43','$inf44','$inf45','$inf46','$inf47','$inf48','$inf49',
    '$inf50','$inf51','$inf52',$total_inf,$prom,$id_eva);");

    // $sql_gc_2 = $conexion->query("INSERT INTO grado_calibre_op
    // (id, d36, d37, d38, d39, d40, d41, `d42`, d43, d44, d45, d46, d47, d48, d49, d50, d51, d52, total_gc_op, promedio, id_eva)
    // VALUES ($id,'$inf36','$inf37','$inf38','$inf39','$inf40','$inf41','$inf42','$inf43','$inf44','$inf45','$inf46','$inf47','$inf48','$inf49',
    // '$inf50','$inf51','$inf52','$total_inf','$prom',$id_eva)");
}
?>