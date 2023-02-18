<form action="./vista_control_calidad_g2.php" method="post">
<div class="d-flex flex-row justify-content-center mb-3 ">
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

<div class="d-flex flex-row justify-content-end ms-auto me-5 mb-1 mt-3">
    <div class="p-2">
        <button  id="g2_boton_sigiente_acopio" class="btn btn-outline-primary" type="submit" name="g2_btn_sig" value="guardado">Siguiente</button>
        
                
    </div>
</div>
</form>