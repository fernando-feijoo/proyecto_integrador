<div id="contenedor-escritorio-contenido" class="container-fluid col text-center pe-2 ps-0">
    <!-- Contenedor de escritorio *interno -->
    <section>
        <div id="escritorio-contenido" class="container-fluid mt-1 mb-1 rounded-4">
            <div class="row">
                <!-- Titulo o encabezado del escritorio -->
                <div class="col-1 d-flex align-items-end mb-1">
                    <a id="ico-home" href="#"><img src="./../../img/home_32x32-escritorio.png" alt="icono-home" /></a>
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

            <div class="row mx-auto">
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
            
            <div class="d-flex flex-row justify-content-between mb-3 mt-3">
                <div class="p-2">FECHA DE INSP:
                    <input type="date">
                </div>
                <div class="p-2">SEMANA:
                    <input type="week">
                </div>
                <div class="p-2">FECHA/HORA SALIDA PATIO:
                    <input type="datetime-local">
                </div>
            </div>
            
            <div class="d-flex flex-row justify-content-between mb-3">
                <div class="p-2">HORA DE LLEGADA:
                    <input type="time">
                </div>
                 <div class="input-group d-flex align-items-center" style="width: 230px;">
                        TIPO DE CAJA:
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>Seleccione</option>
                          <option value="1">CHIQUITA</option>
                          <option value="2">DOLE</option>
                          <option value="3">BD-RELLENAR</option>
                        </select>
                </div> 
                <div class="p-2">CUPO:
                    <input type="number" placeholder="Cantidad" style="width: 5rem;">
                </div>
                <div class="p-2">CONTENEDOR:
                    <input class="text-uppercase" type="text" placeholder="Codigo">
                </div>
            </div>

            <div class="d-flex flex-row justify-content-between mb-3">
                <div class="p-2 input-group d-flex align-items-center" style="width: 230px;">
                    VEHICULO:
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Seleccione</option>
                      <option value="1">VEHICULO 1</option>
                      <option value="2">VEHICULO 2</option>
                      <option value="3">BD-RELLENAR</option>
                    </select>
                </div> 
                <div class="p-2">PLACA:
                    <input type="text" placeholder="No va este" style="width: 6rem;" disabled>
                </div>
                <div class="input-group d-flex align-items-center" style="width: 230px;">
                    CHOFER:
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Seleccione</option>
                      <option value="1">CHOFER 1</option>
                      <option value="2">CHOFER 2</option>
                      <option value="3">BD-RELLENAR</option>
                    </select>
                </div> 
                <div class="p-2">C.I:
                    <input type="number" placeholder="Cedula (no edit)" disabled>
                </div>
            </div>

            <div class="d-flex flex-row justify-content-between mb-5">
                <div class="p-2">NOMBRE DE ACOPIO:
                    <input type="text" placeholder="ACOPIO" style="width: 420px">
                </div>
                <div class="p-2">CANDADOS DE LLEGADA:
                    <input type="text" placeholder="CANDADOS">
                </div>
            </div>

            <div class="d-flex flex-row justify-content-end ms-auto me-5 mb-1 mt-3">
                <div class="p-2">
                    <a class="btn btn-outline-dark">Guardar<img src="./../../img/diskette_24px.png" style="margin-left: 5px;"/></a>
                </div>
            </div>
        </div>
</div>
</section>
<!-- /Contenedor de escritorio *interno -->
</div>