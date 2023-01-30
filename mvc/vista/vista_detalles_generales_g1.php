<style>
    .left {
        text-align: left;
    }

    input {
        border: 2px solid black;
        border-radius: 10px;
        box-shadow: 2px 2px 5px gray;

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
    <div class="row">
        <div class="col-6">
            <h5 class="text-center text-secondary">DATOS DE PRODUCTOR</h5>
            <form>
                <div class="p-2 left">CÓDIGO
                    <input class="inp_c text-uppercase" type="text" placeholder="CODIGO" style="height: 30px;">
                </div>
                <div class="p-2 left">NOMBRE
                    <input class="inp_n text-uppercase" type="text" placeholder="NOMBRE_PROD" style="height: 30px;">
                </div>
                <div class="p-2 left">APELLIDO
                    <input class="text-uppercase" type="text" placeholder="APELLIDO_PROD" style="height: 30px;">
                </div>
                <div class="p-2 left">FINCA
                    <input class="inp_f text-uppercase" type="text" placeholder="FINCA"
                        style="height: 30px; width: 360px;">
                </div>
            </form>
        </div>
        <div class="col-6">
            <h5 class="text-center text-secondary">DATOS DE INSPECTOR</h5>
            <form>
                <div class="p-2 left">CÓDIGO
                    <input class="inp_c text-uppercase" type="text" placeholder="CODIGO" style="height: 30px;">
                </div>
                <div class="p-2 left">NOMBRE
                    <input class="inp_n text-uppercase" type="text" placeholder="NOMBRE_INS" style="height: 30px;">
                </div>
                <div class="p-2 left">APELLIDO
                    <input class="text-uppercase" type="text" placeholder="APELLIDO_INS" style="height: 30px;">
                </div>
            </form>
        </div>
        <hr>
        <div class="eva left">
            <h5 class="text-center text-secondary">DATOS DE LA EVALUACION</h5>
            <form>
                <div class="f1 mt3">
                    CÓDIGO
                    <input class="inp_c text-uppercase" type="text" placeholder="CODIGO" style="height: 30px;">
                    PLACA DEL VEHICULO
                    <input class="inp_n text-uppercase" type="text" placeholder="PLACA" style="height: 30px;">
                    HORA EVA
                    <input class="text-uppercase" type="time" style="height: 30px;">
                    SEMANA
                    <input class="text-uppercase" type="number" placeholder="#" style="height: 30px; width: 70px;">
                </div>
                <div class="f2 mt-3 text-center">
                    VAPOR
                    <input class="inp_n text-uppercase" type="text" placeholder="VAPOR" style="height: 30px;">
                    TIPO DE CAJA
                    <input class="text-uppercase" type="text" placeholder="TIPO_CAJA" style="height: 30px;">
                    FECHA
                    <input class="text-uppercase" type="date" placeholder="#" style="height: 30px;">
                </div>
        </div>
        </form>
    </div>
</div>
</div>