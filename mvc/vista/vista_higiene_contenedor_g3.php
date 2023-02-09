<div id="inicio-datos" class="row mx-auto">
    <div class="containe m-1">
        <div class="row">
            <div class="col form-check form-check-inline   ms-2 fs-5 fw-semibold">
                DATOS DE HIGIENE DEL CONTENEDOR

            </div>

            <table class="table-bordered " style="margin-top: 10px;border-color: black;">

                <thead style="background-color: gray;">
                    <th></th>
                    <th>Acción</th>
                    <th></th>
                    <th>Acción</th>
                </thead>

                <tbody style="background-color: white;">
                    <tr>
                        <td> Llegó lavado</td>
                        <td>
                            <input class="lavado_si" type="radio" id="lavado_si" name="lavado" value="si"> Si
                            <input class="lavado_no" type="radio" id="lavado_no" name="lavado" value="no"> No
                        </td>
                        <td> Presencia de insectos en el contenedor</td>
                        <td>
                            <input class="insectos_si" type="radio" id="insectos_si" name="insectos" value="si"> Si
                            <input class="insectos_no" type="radio" id="insectos_mo"name="insectos"  value="no"> No
                        </td>
                    </tr>
                    <tr>
                        <td> Drenajes limpios</td>
                        <td>
                            <input class="drenajes_si" type="radio" id="drenajes_si" name="drenaje" value="si"> Si
                            <input class="drenajes_no" type="radio" id="drenajes_no" name="drenaje" value="no"> No
                        </td>
                        <td> Llego con sello de llegada</td>
                        <td>
                            <input class="sello_si" type="radio" id="sello_si" name="sello" value="si"> Si
                            <input class="sello_no" type="radio" id="sello_no" name="sello" value="no"> No
                        </td>
                    </tr>
                    <tr>
                        <td> Olor aceptable</td>
                        <td>
                            <input class="olor_si" type="radio" id="olor_si" name="olor" value="si"> Si
                            <input class="olor_no" type="radio" id="olor_no" name="olor" value="no"> No
                        </td>
                        <td> Presencia de moho dentro del contenedor</td>
                        <td>
                            <input class="moho_si" type="radio" id="moho_si"  name="moho" value="si"> Si 
                            <input class="moho_no" type="radio" id="moho_no"  name="moho" value="no"> No
                        </td>
                    </tr>

                    <tr>
                        <td> Residuos químicos</td>
                        <td><input class="quimicos_si" type="radio" id="quimicos_si" name="quimicos"  value="si"> Si
                            <input class="quimicos_no" type="radio" id="quimicos_no" name="quimicos"  value="no"> No
                        </td>
                        <td> Contenedor aceptable</td>
                        <td>
                            <input class="contenedor_si" type="radio" id="contenedor_si" name="contenedor"   value="si"> Si 
                            <input class="contenedor_no" type="radio" id="contenedor_no"  name="contenedor" value="no"> No </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-start  fs-5 fw-semibold" style="margin-top: 20px;">
                Observaciones:
                <textarea class="form-control" id="observacion_higiene" name="higiene_contenedor" rows="3"></textarea>


            </div>

        </div>
    </div>
</div>