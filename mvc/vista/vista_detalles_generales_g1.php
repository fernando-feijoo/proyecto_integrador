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

<div class="container-fluid mt-2">

    <form action="./vista_registro_eva_g1.php" method="post">
        <?php

        if (!empty($_GET["id_eva"])) {
            $_SESSION["id_eva"] = $_GET["id_eva"];
            // echo $_SESSION["id_listado"];
        }

        if (($valiacion = cargar_datos()) != false) {
            $sql = cargar_datos();
            while ($carga_datos = $sql->fetch_object()) {
                ?>
                <div class="row">
                    <div class="col-6">
                        <h5 class="text-center text-secondary">DATOS DE PRODUCTOR</h5>
                        <div class="p-2 left">CÓDIGO
                            <input class="inp_c text-uppercase" type="text" placeholder="CODIGO" style="height: 30px;"
                                value="<?= $carga_datos->codigo ?>">
                        </div>
                        <div class="p-2 left">NOMBRE
                            <input class="inp_n text-uppercase" type="text" placeholder="NOMBRE_PROD" style="height: 30px;"
                                value="<?= $carga_datos->nombre_p ?> ">
                        </div>
                        <div class="p-2 left">APELLIDO
                            <input class="text-uppercase" type="text" placeholder="APELLIDO_PROD" style="height: 30px;"
                                value="<?= $carga_datos->apellido_p ?>">
                        </div>
                        <div class="p-2 left">FINCA
                            <input class="inp_f text-uppercase" type="text" placeholder="FINCA"
                                style="height: 30px; width: 360px;" value="<?= $carga_datos->finca ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <h5 class="text-center text-secondary">DATOS DEL INSPECTOR</h5>
                        <div class="p-2 left">NOMBRE
                            <input class="inp_n text-uppercase" type="text" placeholder="NOMBRE_INS" style="height: 30px;"
                                value="<?= $carga_datos->nombre_i ?>">
                        </div>
                        <div class="p-2 left">APELLIDO
                            <input class="text-uppercase" type="text" placeholder="APELLIDO_INS" style="height: 30px;"
                                value="<?= $carga_datos->apellido_i ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="eva left">
                        <h5 class="text-center text-secondary">DATOS DE LA EVALUACION</h5>
                        <div class="f1 mt3">
                            CÓDIGO
                            <input class="inp_c text-uppercase" type="text" placeholder="CODIGO" disabled style="height: 30px;"
                                value="<?= $carga_datos->cod_evaluacion ?>">
                            PLACA DEL VEHICULO
                            <input class="inp_n text-uppercase" type="text" placeholder="PLACA" style="height: 30px;"
                                value="<?= $carga_datos->placa_vehiculo ?>">
                            HORA EVA
                            <input class="text-uppercase" type="time" style="height: 30px;"
                                value="<?= $carga_datos->hora_eva ?>">
                            SEMANA
                            <input class="text-uppercase" type="number" placeholder="#" style="height: 30px; width: 70px;"
                                value="<?= $carga_datos->semana ?>">
                        </div>
                        <div class="f2 mt-3 text-center">
                            VAPOR
                            <input class="inp_n text-uppercase" type="text" placeholder="VAPOR" style="height: 30px;"
                                value="<?= $carga_datos->vapor ?>">
                            TIPO DE CAJA
                            <input class="text-uppercase" type="text" placeholder="TIPO_CAJA" style="height: 30px;"
                                value="<?= $carga_datos->tipo_caja ?>">
                            FECHA
                            <input class="text-uppercase" type="date" placeholder="#" style="height: 30px;"
                                value="<?= $carga_datos->fecha_eva ?>">
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <div class="p-2">

                            <button id="boton-guardar_eva" class="btn btn-outline-info" type="submit" name="actualizar_eva"
                                value="actualizado">Actualizar</button>

                        </div>
                    </div>
                    <?php
            }
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
                                name="cod_eva">
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
                            <input class="text-uppercase" type="text" placeholder="TIPO_CAJA" style="height: 30px;"
                                name="t_c">
                            FECHA
                            <input class="text-uppercase" type="date" placeholder="#" style="height: 30px;" name="fecha">
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <div class="p-2">

                            <button id="boton-guardar_eva" class="btn btn-outline-info" type="submit" name="guardar_eva"
                                value="actualizado">Guardar</button>

                        </div>
                    </div>
                    <?php
        }
        ?>

    </form>
</div>
</div>