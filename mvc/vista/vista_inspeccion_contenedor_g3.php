<form method="post">
    <?php
  
    if (!empty($_GET["id_inspeccion"])) {

        $_SESSION["id_inspeccion"] = $_GET["id_inspeccion"];
       
    }
    

    ?>


<div class="row mx-auto">

    <h3>Inspeccion del Contenedor</h3>
    <br>
    <div class="d-flex flex-row justify-content-center  line-height:0;">
        <table class="tables borde ">
            <thead>
                <tr>
                    <th class="borde" style="background-color: gray;">ORDEN</th>
                    <th class="borde" style="background-color: gray;">LUGAR</th>
                    <th class="borde" style="background-color: gray;">OK</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td class="borde color" style="background-color:white">1</td>
                    <td class="borde color">Puertas</td>
                    <td class="borde color"> <input type="checkbox" name="puertas" id="PUERTAS"></td>

                </tr>
                <tr>

                    <td class="borde color">2</td>
                    <td class="borde color">Pared Izquierda</td>
                    <td class="borde color"><input type="checkbox" name="pared_izquierda" id="p_izquierda"></td>

                </tr>
                <tr>

                    <td class="borde color">3</td>
                    <td class="borde color">Espaciadores</td>
                    <td class="borde color"><input type="checkbox" name="espaciadores" id="espa"></td>

                </tr>
                <tr>

                    <td class="borde color">4</td>
                    <td class="borde color">Pared Frontal</td>
                    <td class="borde color"><input type="checkbox" name="pared_frontal" id="pa_frontal"></td>

                </tr>
                <tr>

                    <td class="borde color">5</td>
                    <td class="borde color">Pared Derecha</td>
                    <td class="borde color"><input type="checkbox" name="pared_derecha" id="pa_derecha"></td>

                </tr>
                <tr>

                    <td class="borde color">6</td>
                    <td class="borde color">Techo</td>
                    <td class="borde color"><input type="checkbox" name="techo" id="techo"></td>

                </tr>
                <tr>

                    <td class="borde color">7</td>
                    <td class="borde color">Piso Interior</td>
                    <td class="borde color"><input type="checkbox" name="piso_interior" id="pi_interior"></td>

                </tr>
                <tr>

                    <td class="borde color">8</td>
                    <td class="borde color">Piso Exterior</td>
                    <td class="borde color"><input type="checkbox" name="piso_exterior" id="pi_exterior"></td>

                </tr>
                <tr>

                    <td class="borde color">9</td>
                    <td class="borde color">Evaporadores</td>
                    <td class="borde color"><input type="checkbox" name="eva" id="evapo"></td>

                </tr>
                <tr>

                    <td class="borde color">10</td>
                    <td class="borde color">Tornillo Seguridad</td>
                    <td class="borde color"><input type="checkbox" name="torinillo" id="tor_segu"></td>

                </tr>
                <tr>

                    <td class="borde color">11</td>
                    <td class="borde color">Delefactor</td>
                    <td class="borde color"><input type="checkbox" name="delefactor" id="dele"></td>

                </tr>
            </tbody>
        </table>
        <img class="foto2" src="../../img/Contenedor.png" />

    </div>
    <div class="text-start  fs-5 fw-semibold" style="margin-top: 20px;">
        Observaciones:
        <textarea class="form-control" id="observacion_higiene" rows="3"></textarea>


    </div>
    
</div>
</form>


<style>
    .tables {
        width: 50%;
        height: 50px;
        margin: 10px;
    }

    .color {
        background-color: white;
    }

    .borde {
        border: #b2b2b2 1px solid;
    }

    /* .imagen{
      
        width: 30%;
	    height: 30px;
    } */
    .foto2 {
        padding: 5px;
        margin: 5px;
        border: 2px;
        float: right;
        width: 400px;
    }
</style>