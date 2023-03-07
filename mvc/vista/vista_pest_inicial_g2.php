<?php
    if (($valiacion = cargar_datos_g2()) != false) {
    $sql = cargar_datos_g2();
        while ($dat_a_act = $sql->fetch_object()) {
            $dat = $dat_a_act->id;
?>
<form action="./vista_control_calidad_g2.php?g2_n=<?= $dat ?>" method="post">
<div class="d-flex flex-row justify-content-center mb-3 ">
    <!-- <input type="text" value="<?= $_SESSION["id_g2_eva_act"]=$dat ?>"> -->
    <div class="p-2">Fecha:
        <input name="g2_txt_fecha" type="date" id="fechaActual" value="<?= $dat_a_act->fecha ?>" style="height: 36px;">
    </div>
    <div class="p-2">Semana:
        <input name="g2_txt_sem" type="number"  style="height: 36px;"value="<?= $dat_a_act->semana ?>">
    </div>
    <div class="p-2">P.do:
        <input name="g2_txt_pdo" type="number"  style="height: 36px;"value="<?= $dat_a_act->pdo ?>">
    </div>
    <div class="p-2">Vapor:
        <input name="g2_txt_vap" type="var"  style="height: 36px;"value="<?= $dat_a_act->vapor ?>">
    </div>              
</div>
</br>
<div class="d-flex flex-row justify-content-center mb-3">              
    <div class="p-2">Tipo caja:
        <input name="g2_txt_tip_caj" type="text"  style="height: 36px;"value="<?= $dat_a_act->tipo_caj ?>">
    </div>
    <div class="p-2">Peso:
        <input name="g2_txt_peso" type="text" style="height: 36px;"value="<?= $dat_a_act->peso ?>">
    </div>
    <div class="p-2">Destino:
        <input name="g2_txt_dest" type="text"  style="height: 36px;"value="<?= $dat_a_act->destino ?>">
    </div>
    <div class="p-2">L.dedos:
        <input name="g2_txt_l_dedos" type="text" style="height: 36px;"value="<?= $dat_a_act->ldedos ?>">
    </div>  
</div>
</br>
<div class="d-flex flex-row justify-content-center mb-3">
    <div class="p-2">Calibracion:
        <input name="g2_txt_calib" type="text"  style="height: 36px;"value="<?= $dat_a_act->calibracion ?>">
    </div>    
    <div class="p-2">Fumigacion:
        <input name="g2_txt_fumig" type="text" style="height: 36px;"value="<?= $dat_a_act->fumigacion ?>">
    </div>
    <div class="p-2">Transporte:
        <input name="g2_txt_trans" type="text"  style="height: 36px;"value="<?= $dat_a_act->transporte ?>">
    </div>
    <div class="p-2">Codigo:
        <input name="g2_txt_codig" type="text" style="height: 36px;"value="<?= $dat_a_act->codigo ?>">
    </div>
</div>
</br>
<div class="d-flex flex-row justify-content-center mb-3">
    <div class="p-2">Finca:
        <input name="g2_txt_finc" type="text" style="height: 36px;"value="<?= $dat_a_act->finca ?>">
    </div>
</div>
</br>
<div class="d-flex flex-row justify-content mb-5">
    <div class="p-2">Observacion:
        <input name="g2_txt_obser" type="text" style="width: 700px; height: 36px;"value="<?= $dat_a_act->observaciones ?>">
    </div>
</div>
<?php }
    } else { 
        $sql = id_max_g2();
            while ($dat_a_act = $sql->fetch_object()) {
                $dat_ = $dat_a_act->id;
                $dat = $dat_ + 1;
?>
<form action="./vista_control_calidad_g2.php?g2_r=<?= $dat ?>" method="post">
<div class="d-flex flex-row justify-content-center mb-3 ">
    <!-- <input type="text" value="<?= $_SESSION["id_g2_eva_ins"]=$dat ?>"> -->
    <div class="p-2">Fecha:
        <input name="g2_txt_fecha" type="date" id="fechaActual" value="" style="height: 36px;">
    </div>
    <div class="p-2">Semana:
        <input name="g2_txt_sem" type="number"  style="height: 36px;">
    </div>
    <div class="p-2">P.do:
        <input name="g2_txt_pdo" type="number"  style="height: 36px;">
    </div>
    <div class="p-2">Vapor:
        <input name="g2_txt_vap" type="var"  style="height: 36px;">
    </div>              
</div>
</br>
<div class="d-flex flex-row justify-content-center mb-3">              
    <div class="p-2">Tipo caja:
        <input name="g2_txt_tip_caj" type="text"  style="height: 36px;">
    </div>
    <div class="p-2">Peso:
        <input name="g2_txt_peso" type="text" style="height: 36px;">
    </div>
    <div class="p-2">Destino:
        <input name="g2_txt_dest" type="text"  style="height: 36px;">
    </div>
    <div class="p-2">L.dedos:
        <input name="g2_txt_l_dedos" type="text" style="height: 36px;">
    </div>  
</div>
</br>
<div class="d-flex flex-row justify-content-center mb-3">
    <div class="p-2">Calibracion:
        <input name="g2_txt_calib" type="text"  style="height: 36px;">
    </div>    
    <div class="p-2">Fumigacion:
        <input name="g2_txt_fumig" type="text" style="height: 36px;">
    </div>
    <div class="p-2">Transporte:
        <input name="g2_txt_trans" type="text"  style="height: 36px;">
    </div>
    <div class="p-2">Codigo:
        <input name="g2_txt_codig" type="text" style="height: 36px;">
    </div>
</div>
</br>
<div class="d-flex flex-row justify-content-center mb-3">
    <div class="p-2">Finca:
        <input name="g2_txt_finc" type="text" style="height: 36px;">
    </div>
</div>
</br>
<div class="d-flex flex-row justify-content mb-5">
    <div class="p-2">Observacion:
        <input name="g2_txt_obser" type="text" style="width: 700px; height: 36px;">
    </div>
</div>
<?php } } ?>
<div class="d-flex flex-row justify-content-end ms-auto me-5 mb-1 mt-3">
    <div class="p-2">
        <?php
        if (!empty($_GET["g2_id_eva"])) {
            ?>
            <button  id="g2_boton_actualizar_acopio" class="btn btn-outline-primary" type="submit" 
            name="g2_btn_act" value="actuaizar">Actualizar</button>
            
            <?php 
        } else if(!empty($_GET["g2_n"])){
            $c_id = $_SESSION['id_g2_eva_act'];
            ?>
            <a class="btn btn-outline-primary" href="vista_ingreso_de_evaluaciones_g2.php?g2_h=<?=$c_id?>">Siguiente</a>
            <?php
        } else if(!empty($_GET["g2_r"])){
            $c_id = ($_SESSION['id_g2_eva_ins'])-1;
            ?>
            <a class="btn btn-outline-primary" href="vista_ingreso_de_evaluaciones_g2.php?g2_h=<?=$c_id?>">Siguiente</a>
            <?php 
        } else{
            ?>
            <button  id="g2_boton_guardar_acopio" class="btn btn-outline-primary" type="submit" 
            name="g2_btn_guar" value="guardado">Guardar</button>
            <?php 
        }
        ?>
    </div>
</div>
</form>