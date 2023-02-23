<style>
    .left {
        text-align: left;
    }

    .inp_c {
        margin-left: 10px;
    }

    .inp_n {
        margin-left: 5px;
    }

    .inp_f {
        margin-left: 26px;
    }
</style>

<div class="container-fluid mt-0">
            <?php

            if (($valiacion = cargar_dg()) != false) {
                $sql = cargar_dg();
                while ($carga_datos = $sql->fetch_object()) {
                    // echo $carga_datos -> cod_eva;
                    ?>
            <div class="row">
                <div class="col-6">
                    <h5 class="text-center text-secondary">DATOS DE PRODUCTOR</h5>
                    
                    <div class="p-2 left">CÓDIGO
                        <input class="inp_c text-uppercase" type="text" placeholder="CODIGO" style="height: 30px;"
                            value="<?= $carga_datos->cod_prod ?> " name="cod_p_i">
                    </div>
                    <div class="p-2 left">NOMBRE
                        <input class="inp_n text-uppercase" type="text" placeholder="NOMBRE_PROD" style="height: 30px;"
                            value="<?= $carga_datos->nombre_p ?> " name="n_prod">
                    </div>
                    <div class="p-2 left">APELLIDO
                        <input class="text-uppercase" type="text" placeholder="APELLIDO_PROD" style="height: 30px;"
                            value="<?= $carga_datos->apellido_p ?> " name="a_prod">
                    </div>
                    <div class="p-2 left">FINCA
                        <input class="inp_f text-uppercase" type="text" placeholder="FINCA" style="height: 30px; width: 360px;"
                            value="<?= $carga_datos->finca ?>" name="finca">
                    </div>
                </div>
                <div class="col-6">
                    <h5 class="text-center text-secondary">DATOS DEL INSPECTOR</h5>
                    <div class="p-2 left">NOMBRE
                        <input class="inp_n text-uppercase" type="text" placeholder="NOMBRE_INS" style="height: 30px;"
                            value="<?= $carga_datos->nombre_i ?>" name="n_insp">
                    </div>
                    <div class="p-2 left">APELLIDO
                        <input class="text-uppercase" type="text" placeholder="APELLIDO_INS" style="height: 30px;"
                            value="<?= $carga_datos->apellido_i ?>" name="a_insp">
                    </div>
                </div>
                <hr>
                <div class="eva left">
                    <h5 class="text-center text-secondary">DATOS DE LA EVALUACION</h5>
                    <div class="f1 mt3">
                        CÓDIGO
                        <input class="inp_c text-uppercase" type="text" placeholder="CODIGO" style="height: 30px; background-color: rgb(234, 234, 234);"
                            name="cod_evaluacion" value="<?= $carga_datos->cod_eva ?> " readonly>
                        PLACA DEL VEHICULO
                        <input class="inp_n text-uppercase" type="text" placeholder="PLACA" style="height: 30px;"
                            value="<?= $carga_datos->placa_vehiculo ?>" name="placa">
                        HORA EVA
                        <input class="text-uppercase" type="time" style="height: 30px;" value="<?= $carga_datos->hora_eva ?>"
                            name="hora">
                        SEMANA
                        <input class="text-uppercase" type="number" placeholder="#" style="height: 30px; width: 70px;"
                            value="<?= $carga_datos->semana ?>" name="semana">
                    </div>
                    <div class="f2 mt-3 text-center">
                        VAPOR
                        <input class="inp_n text-uppercase" type="text" placeholder="VAPOR" style="height: 30px;"
                            value="<?= $carga_datos->vapor ?>" name="vapor">
                        TIPO DE CAJA
                        <input class="text-uppercase" type="text" placeholder="TIPO_CAJA" style="height: 30px;"
                            value="<?= $carga_datos->tipo_caja ?>" name="t_c">
                        FECHA
                        <input class="text-uppercase" type="date" placeholder="#" style="height: 30px;"
                            value="<?= $carga_datos->fecha_eva ?>" name="fecha">
                    </div>
                </div>
            <?php }
            } else { 
            ?>
            <div class="row">
                <div class="col-6">
                    <h5 class="text-center text-secondary">DATOS DE PRODUCTOR</h5>
                    <div class="p-2 left">CÓDIGO
                        <input class="inp_c text-uppercase" type="text" placeholder="CODIGO" style="height: 30px;"
                            name="cod_p_i">
                    </div>
                    <div class="p-2 left">NOMBRE
                        <input class="inp_n text-uppercase" type="text" placeholder="NOMBRE_PROD" style="height: 30px;"
                            name="n_prod">
                    </div>
                    <div class="p-2 left">APELLIDO
                        <input class="text-uppercase" type="text" placeholder="APELLIDO_PROD" style="height: 30px;"
                            name="a_prod">
                    </div>
                    <div class="p-2 left">FINCA
                        <input class="inp_f text-uppercase" type="text" placeholder="FINCA"
                            style="height: 30px; width: 360px;" name="finca">
                    </div>
                </div>
                <div class="col-6">
                    <h5 class="text-center text-secondary">DATOS DEL INSPECTOR</h5>
                    <div class="p-2 left">NOMBRE
                        <input class="inp_n text-uppercase" type="text" placeholder="NOMBRE_INS" style="height: 30px;"
                            name="n_insp">
                    </div>
                    <div class="p-2 left">APELLIDO
                        <input class="text-uppercase" type="text" placeholder="APELLIDO_INS" style="height: 30px;"
                            name="a_insp">
                    </div>
                </div>
                <hr>
                <div class="eva left">
                    <h5 class="text-center text-secondary">DATOS DE LA EVALUACION</h5>
                    <div class="f1 mt3">
                        CÓDIGO
                        <input class="inp_c text-uppercase" type="text" placeholder="CODIGO" style="height: 30px;"
                            name="cod_evaluacion">
                        PLACA DEL VEHICULO
                        <input class="inp_n text-uppercase" type="text" placeholder="PLACA" style="height: 30px;"
                            name="placa">
                        HORA EVA
                        <input class="text-uppercase" type="time" style="height: 30px;" name="hora">
                        SEMANA
                        <input class="text-uppercase" type="number" placeholder="#" style="height: 30px; width: 70px;"
                            name="semana">
                    </div>
                    <div class="f2 mt-3 text-center">
                        VAPOR
                        <input class="inp_n text-uppercase" type="text" placeholder="VAPOR" style="height: 30px;"
                            name="vapor">
                        TIPO DE CAJA
                        <input class="text-uppercase" type="text" placeholder="TIPO_CAJA" style="height: 30px;" name="t_c">
                        FECHA
                        <input class="text-uppercase" type="date" placeholder="#" style="height: 30px;" name="fecha">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>