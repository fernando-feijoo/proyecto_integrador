<?php
function guardar_evaluacion(){
    if (!empty($_POST["guardar_eva"])) {
        $id_eva=$_SESSION["id_eva"];
        //PARA LA TABLA DE PRODUCTORES_INSPECTORES
        $cod_prod = strtoupper($_POST["cod_p_i"]);
        $nombre_productor=strtoupper($_POST["n_prod"]);
        $apellido_productor=strtoupper($_POST["a_prod"]);
        $finca=strtoupper($_POST["finca"]);
        $nombre_inspector=strtoupper($_POST["n_insp"]);
        $apellido_inspector=strtoupper($_POST["a_insp"]);
        //PARA LA TABLA EVALUACIONES
        $cod_eva=strtoupper($_POST["cod_eva"]);
        $placa=strtoupper($_POST["placa"]);
        $hora = $_POST["hora"];
        $semana=$_POST["semana"];
        $vapor=strtoupper($_POST["vapor"]);
        $tipoCaja=strtoupper($_POST["t_c"]);
        $fecha= date("Y-m-d", strtotime($_POST["fecha"]));
    
        $conexion = conexionBd();
    
        $sql_pi = $conexion->query("INSERT INTO productores_inspectores(codigo, nombre_p, apellido_p, finca, nombre_i, apellido_i) 
        VALUES ('$cod_prod','$nombre_productor','$apellido_productor','$finca','$nombre_inspector','$apellido_inspector')");
    
        $sql_eva = $conexion->query("INSERT INTO evaluaciones(cod_evaluacion, semana, fecha_eva, hora_eva, vapor, tipo_caja, placa_vehiculo,estado, cod_prod_insp) 
        VALUES ('$cod_eva',$semana,'$fecha','$hora','$vapor','$tipoCaja','$placa','ACTIVO','$cod_prod')");
    
    if ($sql_pi==1 && $sql_eva==1) {
        echo '<div class="alert alert-succes">Datos ingresados correctamente </div>';
    }else{
        echo '<div class="alert alert-danger">Error al registrar</div>';
    }
    }
}

function actualizar_eva(){
    
}

?>