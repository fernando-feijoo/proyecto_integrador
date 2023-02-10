<?php
if (!empty($_POST["guardar_eva"]) || !empty($_POST["actualizar_eva"])) {
    // if (
    //     !empty($_POST["cod_p_i"]) && !empty($_POST["n_prod"]) && !empty($_POST["a_prod"]) && !empty($_POST["a_insp"])
    //     && !empty($_POST["finca"]) && !empty($_POST["n_insp"]) && !empty($_POST["cod_evaluacion"]) && !empty($_POST["semana"]
    //     && !empty($_POST["fecha"])) && !empty($_POST["hora"]) && !empty($_POST["t_c"])
    // ) {

        //PARA LA TABLA EVALUACIONES
        if (!empty($_POST["guardar_eva"])) {
            $id_eva = $_SESSION["id_conteo"];
            unset($_SESSION["id_eva"]);
        } else if (!empty($_POST["actualizar_eva"])) {
            $id_eva = $_SESSION["id_eva"];
            unset($_SESSION["id_conteo"]);
        }
        $cod_prod = strtoupper($_POST["cod_p_i"]);
        $nombre_productor = strtoupper($_POST["n_prod"]);
        $apellido_productor = strtoupper($_POST["a_prod"]);
        $finca = strtoupper($_POST["finca"]);
        $nombre_inspector = strtoupper($_POST["n_insp"]);
        $apellido_inspector = strtoupper($_POST["a_insp"]);
        $placa = strtoupper($_POST["placa"]);
        $cod_eva = strtoupper($_POST["cod_evaluacion"]);
        //echo $_POST['cod_evaluacion']; 
        // $cod_eva=strtoupper($_POST["EVA002"]);
        $hora = $_POST["hora"];
        $semana = $_POST["semana"];
        $vapor = strtoupper($_POST["vapor"]);
        $tipoCaja = strtoupper($_POST["t_c"]);
        $fecha = date("Y-m-d", strtotime($_POST["fecha"]));


        $conexion = conexionBd();

        $sql_eva = $conexion->query("SELECT insertarDetallesGen ($id_eva, '$cod_eva', $semana, '$fecha', '$hora',
        '$vapor', '$tipoCaja', '$placa', 'ACTIVO', '$cod_prod', '$nombre_productor', '$apellido_productor', '$finca', 
        '$nombre_inspector', '$apellido_inspector')");

        if ($sql_eva == true) {
            echo "<div class='alert alert-success text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
            ¡Datos guardados correctamente!</div>";
        } else {
            echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
            ¡Error al guardar los datos! </div>";
        }
    // }else{
    //     echo "<div class='alert alert-danger text-center' id='alertas' role='alert' style='width: 85%; margin: auto !important; margin-top: 1rem !important;'>
    //     ¡Rellene los campos necesarios! </div>";
    // }

}