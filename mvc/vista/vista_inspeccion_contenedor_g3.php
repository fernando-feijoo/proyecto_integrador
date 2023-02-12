<div class="row mx-auto">

    <h3>Inspeccion del Contenedor</h3>
    <br>
    <div class="d-flex flex-row justify-content-center  line-height:0;">
        <table class="table table-bordered table-sm" style="width: 500px;">
            <thead>
                <tr>
                    <th class="borde" style="background-color: gray;">ORDEN</th>
                    <th class="borde" style="background-color: gray;">LUGAR</th>
                    <th class="borde" style="background-color: gray;">OK</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                <tr>
                    <td class="borde color">1</td>
                    <td class="borde color">Puertas</td>
                    <td class="borde color"> <input type="checkbox" name="uno" id="puertas" value="1" checked></td>
                </tr>
                <tr>
                    <td class="borde color">2</td>
                    <td class="borde color">Pared Izquierda</td>
                    <td class="borde color"><input type="checkbox" name="dos" id="p_izquierda" value="1"></td>
                </tr>
                <tr>
                    <td class="borde color">3</td>
                    <td class="borde color">Espaciadores</td>
                    <td class="borde color"><input type="checkbox" name="tres" id="espa" value="1"></td>
                </tr>
                <tr>
                    <td class="borde color">4</td>
                    <td class="borde color">Pared Frontal</td>
                    <td class="borde color"><input type="checkbox" name="cuatro" id="pa_frontal" value="1"></td>
                </tr>
                <tr>
                    <td class="borde color">5</td>
                    <td class="borde color">Pared Derecha</td>
                    <td class="borde color"><input type="checkbox" name="cinco" id="pa_derecha" value="1"></td>
                </tr>
                <tr>
                    <td class="borde color">6</td>
                    <td class="borde color">Techo</td>
                    <td class="borde color"><input type="checkbox" name="seis" id="techo" value="1"></td>
                </tr>
                <tr>
                    <td class="borde color">7</td>
                    <td class="borde color">Piso Interior</td>
                    <td class="borde color"><input type="checkbox" name="siete" id="pi_interior" value="1"></td>
                </tr>
                <tr>
                    <td class="borde color">8</td>
                    <td class="borde color">Piso Exterior</td>
                    <td class="borde color"><input type="checkbox" name="ocho" id="pi_exterior" value="1"></td>
                </tr>
                <tr>
                    <td class="borde color">9</td>
                    <td class="borde color">Evaporadores</td>
                    <td class="borde color"><input type="checkbox" name="nueve" id="evapo" value="1"></td>
                </tr>
                <tr>
                    <td class="borde color">10</td>
                    <td class="borde color">Tornillo Seguridad</td>
                    <td class="borde color"><input type="checkbox" name="diez" id="tor_segu" value="1"></td>
                </tr>
                <tr>
                    <td class="borde color">11</td>
                    <td class="borde color">Delefactor</td>
                    <td class="borde color"><input type="checkbox" name="once" id="dele" value="1"></td>
                </tr>
            </tbody>
        </table>
        <img class="foto2" src="../../img/Contenedor.png" />

    </div>
    <div class="text-start  fs-5 fw-semibold" style="margin-top: 20px;">
        Observaciones:
        <textarea class="form-control" id="observacion_higiene" rows="3"></textarea>
        <input type="hidden" name="btn-guardar-inspeccion" id="btn-guardar-value1" value="guardado">
        <button id="boton-guardar-inspeccion" class="btn btn-outline-primary" type="submit" name="btn-guardar-inspeccion" value="guardado">Guardar</button>
    </div>

</div>