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

            <div id="inicio-datos" class="row mx-auto">
                <div class="col-12 text-start mt-1">
                    <div class="form-check form-check-inline ms-2 fs-5 fw-semibold ">
                        Ingrese el tipo de contendor:
                    </div>
                    <!-- Opciones de seleccion de radio button -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="op_exportacion">
                        <label class="form-check-label" for="inlineRadio1">Exportación</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="op_comercio">
                        <label class="form-check-label" for="inlineRadio2">Comercio</label>
                    </div>
                    <!-- /Opciones de seleccion de radio button -->
                </div>
            </div>

            <div id="inicio-formulario" class="d-flex flex-row justify-content-center mb-3 mt-3">
                <div class="p-2">FECHA DE INSP:
                    <input type="date" id="fechaActual" value="" style="height: 36px;">
                </div>
                <div class="p-2">SEMANA:
                    <input type="week" id="semanaActual" value="" style="height: 36px;">
                </div>
                <div class="p-2">FECHA/HORA SALIDA PATIO:
                    <input type="datetime-local" style="height: 36px;">
                </div>
            </div>

            <div class="d-flex flex-row justify-content-center mb-3">
                <div class="p-2">HORA DE LLEGADA:
                    <input type="time" id="horaLlegada" value="" style="height: 36px;">
                </div>
                <div class="input-group d-flex align-items-center" style="width: 230px;">
                    TIPO DE CAJA:
                    <select class="ms-1 form-select" id="inputGroupSelect01">
                        <option selected>Seleccione</option>
                        <option value="1">CHIQUITA</option>
                        <option value="2">DOLE</option>
                        <option value="3">BD-RELLENAR</option>
                    </select>
                </div>
                <div class="p-2">CUPO:
                    <input type="number" placeholder="N°" style="width: 5rem; height: 36px;">
                </div>
                <div class="p-2">CONTENEDOR:
                    <input class="text-uppercase" type="text" placeholder="Codigo" style="height: 36px;">
                </div>
            </div>

            <div class="d-flex flex-row justify-content-center mb-3">
                <div class="p-2 input-group d-flex align-items-center" style="width: 230px;">
                    VEHICULO:
                    <select class="ms-1 form-select" id="inputGroupSelect01">
                        <option selected>Seleccione</option>
                        <option value="1">VEHICULO 1</option>
                        <option value="2">VEHICULO 2</option>
                        <option value="3">BD-RELLENAR</option>
                    </select>
                </div>
                <div class="p-2">PLACA:
                    <input type="text" placeholder="" style="width: 6rem; height: 36px;" disabled>
                </div>
                <div class="input-group d-flex align-items-center" style="width: 230px;">
                    CHOFER:
                    <select class="ms-1 form-select" id="inputGroupSelect01">
                        <option selected>Seleccione</option>
                        <option value="1">CHOFER 1</option>
                        <option value="2">CHOFER 2</option>
                        <option value="3">BD-RELLENAR</option>
                    </select>
                </div>
                <div class="p-2">C.I:
                    <input type="number" placeholder="" disabled style="height: 36px;">
                </div>
            </div>

            <div class="d-flex flex-row justify-content-center mb-5">
                <div class="p-2">NOMBRE DE ACOPIO:
                    <input class="text-uppercase" type="text" placeholder="ACOPIO" style="width: 420px; height: 36px;">
                </div>
                <div class="p-2">CANDADOS DE LLEGADA:
                    <input class="text-uppercase" type="text" placeholder="CANDADOS" style="height: 36px;">
                </div>
            </div>

            <div class="d-flex flex-row justify-content-end ms-auto me-5 mb-1 mt-3">
                <div class="p-2">
                    <a id="boton-guardar-garita" class="btn btn-outline-primary">Guardar</a>
                    <a id="boton-actualizar-garita" class="btn btn-outline-info d-none">Actualizar</a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
include_once "./../../layout/footer.php";
?>