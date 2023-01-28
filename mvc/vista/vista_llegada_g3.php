<?php
include_once "./../../layout/header.php";
include_once "./Grupo 3/menu_garita.php";
?>
<div id="contenedor-escritorio-contenido" class="container-fluid col text-center pe-2 ps-0">
    <!-- Contenedor de escritorio *interno -->
    <section>
        <div id="escritorio-contenido" class="container-fluid mt-1 mb-1 rounded-4">
            <div class="row">
                <!-- Titulo o encabezado del escritorio -->
                <div class="col-1 d-flex align-items-end mb-1">
                    <a id="ico-home" href="./dashboard.php"><img src="./../../img/home_32x32-escritorio.png" alt="icono-home" /></a>
                </div>
                <div class="col-10 me-3 ms-3 mt-4">
                    <div id="titulo-escritorio">
                        BITACORA PARA REGISTRO DE CONTENEDORES<br>
                        DE COMERCIO Y EXPORTACIÓN
                    </div>
                </div>
                <!-- /Titulo o encabezado del escritorio -->
            </div>
            <div id="caja-separacion-escritorio" class="mx-auto"></div>

            <?php
            include_once("./../modelo/conexion_bd.php");
            include_once "./../controlador/Grupo 3/registro_llegada.php";
            include("./../modelo/Grupo 3/modelo_llegada.php");
            ?>

            <form action="#" method="post">
                <div id="inicio-datos" class="row mx-auto">
                    <div class="col-12 text-start mt-1">
                        <div class="form-check form-check-inline ms-2 fs-5 fw-semibold ">
                            Ingrese el tipo de contendor:
                        </div>
                        <!-- Opciones de seleccion de radio button -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions_gg3" id="inlineRadio1" value="EXPORTACION">
                            <label class="form-check-label" for="inlineRadio1">Exportación</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions_gg3" id="inlineRadio2" value="COMERCIO">
                            <label class="form-check-label" for="inlineRadio2">Comercio</label>
                        </div>
                        <!-- /Opciones de seleccion de radio button -->
                    </div>
                </div>

                <div id="inicio-formulario" class="d-flex flex-row justify-content-center mb-3 mt-3">
                    <div class="p-2">FECHA DE INSP:
                        <input type="date" id="fechaActual" value="" style="height: 36px;" name="fecha_inspeccion_gg3">
                    </div>
                    <div class="p-2">SEMANA:
                        <input type="number" id="semanaActual" value="" style="height: 36px; width: 120px;" name="semana_gg3">
                    </div>
                    <div class="p-2">FECHA/HORA SALIDA PATIO:
                        <input type="datetime-local" style="height: 36px;" name="fecha_hora_salida_gg3">
                    </div>
                </div>

                <div class="d-flex flex-row justify-content-center mb-3">
                    <div class="p-2">HORA DE LLEGADA:
                        <input type="time" id="horaLlegada" value="" style="height: 36px;" name="hora_llegada_gg3">
                    </div>
                    <div class="input-group d-flex align-items-center" style="width: 230px;" name="">
                        TIPO DE CAJA:
                        <select class="ms-1 form-select" id="inputGroupSelect01" name="tipo_caja_gg3">
                            <option selected>Seleccione</option>
                            <?php
                            $sql = datos_lista_caja();
                            while ($datos = $sql->fetch_object()) {
                            ?>
                                <option value=<?= $datos->id ?>><?= $datos->tipo_de_caja ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="p-2">CUPO:
                        <input type="number" placeholder="N°" style="width: 5rem; height: 36px;" name="cupo_gg3">
                    </div>
                    <div class="p-2">CONTENEDOR:
                        <input class="text-uppercase" type="text" placeholder="Codigo" style="height: 36px;" name="contenedor_gg3">
                    </div>
                </div>

                <div class="d-flex flex-row justify-content-center mb-3">
                    <div class="p-2 input-group d-flex align-items-center" style="width: 270px;" name="">
                        PLACA:
                        <select class="ms-1 form-select" id="inputGroupSelect02" name="placa_gg3">
                            <option selected>Seleccione</option>
                            <?php
                            $sql = datos_lista_vehiculo();
                            while ($datos_placa = $sql->fetch_object()) {
                            ?>
                                <option value=<?= $datos_placa->id ?>><?= $datos_placa->placa ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="p-2">MARCA:
                        <input type="text" placeholder="" style="width: 120px; height: 36px;" disabled name="marca" value="">
                    </div>
                    <div class="input-group d-flex align-items-center" style="width: 270px;" name="">
                        CHOFER:
                        <select class="ms-1 form-select" id="inputGroupSelect03" name="chofer_gg3">
                            <option selected>Seleccione</option>
                            <?php
                            $sql = datos_lista_chofer();
                            while ($datos_chofer = $sql->fetch_object()) {
                            ?>
                                <option value=<?= $datos_chofer->id ?>><?= $datos_chofer->nombres ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="p-2">C.I:
                        <input type="number" placeholder="" disabled style="height: 36px;" name="cedula" value="">
                    </div>
                </div>

                <div class="d-flex flex-row justify-content-center mb-5">
                    <div class="p-2">NOMBRE DE ACOPIO:
                        <input class="text-uppercase" type="text" placeholder="ACOPIO" style="width: 420px; height: 36px;" name="nombre_copio_gg3">
                    </div>
                    <div class="p-2">CANDADOS DE LLEGADA:
                        <input class="text-uppercase" type="text" placeholder="CANDADOS" style="height: 36px;" name="candados_llegada_gg3">
                    </div>
                </div>

                <div class="d-flex flex-row justify-content-end ms-auto me-5 mb-1 mt-3">
                    <div class="p-2">
                        <button id="boton-guardar-garita" class="btn btn-outline-primary" type="submit" name="btn-guardar" value="guardado">Guardar</button>
                        <!-- <button id="boton-actualizar-garita" class="btn btn-outline-info" type="submit" name="btn-actualizar" value="actualizado">Actualizar</button> -->
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<?php
include_once "./../../layout/footer.php";
?>