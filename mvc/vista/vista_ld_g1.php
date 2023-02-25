<style>
        .ld-sup {
                background-color: white;
                width: 192px;
                text-align: center;
                border: 1px solid lightgray;

        }

        .med-cm {
                display: flex;
                background-color: lightgray;
                border: 1px solid white;
                margin-top: -5px;
                width: 192px;

        }

        .ld-med {}

        .cm {
                margin-right: -3px;
        }

        .cm-inf {
                margin-right: 2px;
                background-color: white;
        }

        .tots {
                background-color: white;
        }
</style>

<script>
        document.addEventListener('DOMContentLoaded', function () {
                document.querySelector('#boton-calcular_ld').addEventListener('click', function () {

                        //Datos 6 cm
                        const cm_6_0 = Number(document.querySelector('#cm-6-0').value);
                        const cm_6_2 = Number(document.querySelector('#cm-6-2').value);
                        const cm_6_4 = Number(document.querySelector('#cm-6-4').value);
                        const cm_6_6 = Number(document.querySelector('#cm-6-6').value);
                        const cm_6_8 = Number(document.querySelector('#cm-6-8').value);

                        //Datos 7 cm

                        const cm_7_0 = Number(document.querySelector('#cm-7-0').value);
                        const cm_7_2 = Number(document.querySelector('#cm-7-2').value);
                        const cm_7_4 = Number(document.querySelector('#cm-7-4').value);
                        const cm_7_6 = Number(document.querySelector('#cm-7-6').value);
                        const cm_7_8 = Number(document.querySelector('#cm-7-8').value);

                        //Datos 8 cm

                        const cm_8_0 = Number(document.querySelector('#cm-8-0').value);
                        const cm_8_2 = Number(document.querySelector('#cm-8-2').value);
                        const cm_8_4 = Number(document.querySelector('#cm-8-4').value);
                        const cm_8_6 = Number(document.querySelector('#cm-8-6').value);
                        const cm_8_8 = Number(document.querySelector('#cm-8-8').value);

                        //Datos 9 cm

                        const cm_9_0 = Number(document.querySelector('#cm-9-0').value);
                        const cm_9_2 = Number(document.querySelector('#cm-9-2').value);
                        const cm_9_4 = Number(document.querySelector('#cm-9-4').value);
                        const cm_9_6 = Number(document.querySelector('#cm-9-6').value);
                        const cm_9_8 = Number(document.querySelector('#cm-9-8').value);

                        //Datos 10 cm

                        const cm_10_0 = Number(document.querySelector('#cm-10-0').value);
                        const cm_10_2 = Number(document.querySelector('#cm-10-2').value);
                        const cm_10_4 = Number(document.querySelector('#cm-10-4').value);
                        const cm_10_6 = Number(document.querySelector('#cm-10-6').value);
                        const cm_10_8 = Number(document.querySelector('#cm-10-8').value);

                        //Datos 11 cm

                        const cm_11_0 = Number(document.querySelector('#cm-11-0').value);
                        const cm_11_2 = Number(document.querySelector('#cm-11-2').value);
                        const cm_11_4 = Number(document.querySelector('#cm-11-4').value);
                        const cm_11_6 = Number(document.querySelector('#cm-11-6').value);
                        const cm_11_8 = Number(document.querySelector('#cm-11-8').value);

                        //Cálculos 6

                        const res6_0 = 6 * cm_6_0;
                        const res6_2 = 6.2 * cm_6_2;
                        const res6_4 = 6.4 * cm_6_4;
                        const res6_6 = 6.6 * cm_6_6;
                        const res6_8 = 6.8 * cm_6_8;

                        //Cálculos 7

                        const res7_0 = 7 * cm_7_0;
                        const res7_2 = 7.2 * cm_7_2;
                        const res7_4 = 7.4 * cm_7_4;
                        const res7_6 = 7.6 * cm_7_6;
                        const res7_8 = 7.8 * cm_7_8;

                        //Cálculos 8

                        const res8_0 = 8 * cm_8_0;
                        const res8_2 = 8.2 * cm_8_2;
                        const res8_4 = 8.4 * cm_8_4;
                        const res8_6 = 8.6 * cm_8_6;
                        const res8_8 = 8.8 * cm_8_8;

                        //Cálculos 9

                        const res9_0 = 9 * cm_9_0;
                        const res9_2 = 9.2 * cm_9_2;
                        const res9_4 = 9.4 * cm_9_4;
                        const res9_6 = 9.6 * cm_9_6;
                        const res9_8 = 9.8 * cm_9_8;

                        //Cálculos 10

                        const res10_0 = 10 * cm_10_0;
                        const res10_2 = 10.2 * cm_10_2;
                        const res10_4 = 10.4 * cm_10_4;
                        const res10_6 = 10.6 * cm_10_6;
                        const res10_8 = 10.8 * cm_10_8;

                        //Cálculos 11

                        const res11_0 = 11 * cm_11_0;
                        const res11_2 = 11.2 * cm_11_2;
                        const res11_4 = 11.4 * cm_11_4;
                        const res11_6 = 11.6 * cm_11_6;
                        const res11_8 = 11.8 * cm_11_8;

                        //Totales

                        const res_total_sup = cm_6_0 + cm_6_2 + cm_6_4 + cm_6_6 + cm_6_8 + cm_7_0 + cm_7_2 + cm_7_4 + cm_7_6 + cm_7_8 + cm_8_0 + cm_8_2
                                + cm_8_4 + cm_8_6 + cm_8_8 + cm_9_0 + cm_9_2 + cm_9_4 + cm_9_6 + cm_9_8 + cm_10_0 + cm_10_2 + cm_10_4 + cm_10_6 + cm_10_8 + cm_11_0 + cm_11_2 + cm_11_4 + cm_11_6 + cm_11_8;

                        const res_total_inf = res6_0 + res6_2 + res6_4 + res6_6 + res6_8 + res7_0 + res7_2 + res7_4 + res7_6 + res7_8 + res8_0 + res8_2 + res8_4 + res8_6 + res8_8 + res9_0 + res9_2 + res9_4 + res9_6 + res9_8 + res10_0 + res10_2 + res10_4 + res10_6 + res10_8 + res11_0 + res11_2 + res11_4 + res11_6 + res11_8;

                        const prom_ld = res_total_inf/res_total_sup;
                        //Colocar resultados

                        //6Cm

                        document.querySelector('#cm-6-0-inf').value = res6_0;
                        document.querySelector('#cm-6-2-inf').value = res6_2;
                        document.querySelector('#cm-6-4-inf').value = res6_4;
                        document.querySelector('#cm-6-6-inf').value = res6_6;
                        document.querySelector('#cm-6-8-inf').value = res6_8;

                        //7Cm

                        document.querySelector('#cm-7-0-inf').value = res7_0;
                        document.querySelector('#cm-7-2-inf').value = res7_2;
                        document.querySelector('#cm-7-4-inf').value = res7_4;
                        document.querySelector('#cm-7-6-inf').value = res7_6;
                        document.querySelector('#cm-7-8-inf').value = res7_8;

                        //8Cm

                        document.querySelector('#cm-8-0-inf').value = res8_0;
                        document.querySelector('#cm-8-2-inf').value = res8_2;
                        document.querySelector('#cm-8-4-inf').value = res8_4;
                        document.querySelector('#cm-8-6-inf').value = res8_6;
                        document.querySelector('#cm-8-8-inf').value = res8_8;

                        //9Cm

                        document.querySelector('#cm-9-0-inf').value = res9_0;
                        document.querySelector('#cm-9-2-inf').value = res9_2;
                        document.querySelector('#cm-9-4-inf').value = res9_4;
                        document.querySelector('#cm-9-6-inf').value = res9_6;
                        document.querySelector('#cm-9-8-inf').value = res9_8;

                        //10Cm

                        document.querySelector('#cm-10-0-inf').value = res10_0;
                        document.querySelector('#cm-10-2-inf').value = res10_2;
                        document.querySelector('#cm-10-4-inf').value = res10_4;
                        document.querySelector('#cm-10-6-inf').value = res10_6;
                        document.querySelector('#cm-10-8-inf').value = res10_8;

                        //11Cm

                        document.querySelector('#cm-11-0-inf').value = res11_0;
                        document.querySelector('#cm-11-2-inf').value = res11_2;
                        document.querySelector('#cm-11-4-inf').value = res11_4;
                        document.querySelector('#cm-11-6-inf').value = res11_6;
                        document.querySelector('#cm-11-8-inf').value = res11_8;

                        //Totales

                        document.querySelector('#total-sup').value = res_total_sup;
                        document.querySelector('#total-inf').value = res_total_inf;
                        document.querySelector('#promedio-ld').value = prom_ld;




                });
        });
</script>
<div class="largo_dedo">
        <div class="Container-ld-sup">
                <div class="ld-cm">
                        <div class="ld-f1">
                                <div class="fila-1-678 d-flex" style="margin-top: 20px">
                                        <div class="ld-sup-6">
                                                <h6 class="ld-sup">6</h6>
                                                <div class="med-cm">
                                                        <h6 class="ld-med" style="margin-left: 15px">0</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">2</h6>
                                                        <h6 class="ld-med" style="margin-left: 25px">4</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">6</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">8</h6>
                                                </div>
                                                <div class="cm-2">
                                                
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-6-0" id="cm-6-0">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-6-2" id="cm-6-2">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-6-4" id="cm-6-4">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-6-6" id="cm-6-6">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px; margin-right: 4px;" name="cm-6-8"
                                                                id="cm-6-8">
                                                </div>


                                        </div>

                                        <div class="ld-sup-7" style="margin-left: 5px">
                                                <h6 class="ld-sup">7</h6>
                                                <div class="med-cm">
                                                        <h6 class="ld-med" style="margin-left: 15px">0</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">2</h6>
                                                        <h6 class="ld-med" style="margin-left: 25px">4</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">6</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">8</h6>
                                                </div>
                                                <div class="cm-2">
                                                        
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-7-0" id="cm-7-0">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-7-2" id="cm-7-2">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-7-4" id="cm-7-4">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-7-6" id="cm-7-6">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-7-8" id="cm-7-8">
                                                </div>


                                        </div>
                                        <div class="ld-sup-8" style="margin-left: 5px">
                                                <h6 class="ld-sup">8</h6>
                                                <div class="med-cm">
                                                        <h6 class="ld-med" style="margin-left: 15px">0</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">2</h6>
                                                        <h6 class="ld-med" style="margin-left: 25px">4</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">6</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">8</h6>
                                                </div>
                                                <div class="cm-2">
                                                        
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-8-0" id="cm-8-0">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-8-2" id="cm-8-2">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-8-4" id="cm-8-4">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-8-6" id="cm-8-6">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-8-8" id="cm-8-8">
                                                </div>


                                        </div>
                                        <div class="ld-sup-9" style="margin-left: 5px">
                                                <h6 class="ld-sup">9</h6>
                                                <div class="med-cm">
                                                        <h6 class="ld-med" style="margin-left: 15px">0</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">2</h6>
                                                        <h6 class="ld-med" style="margin-left: 25px">4</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">6</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">8</h6>
                                                </div>
                                                <div class="cm-2">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-9-0" id="cm-9-0">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-9-2" id="cm-9-2">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-9-4" id="cm-9-4">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-9-6" id="cm-9-6">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-9-8" id="cm-9-8">
                                                </div>

                                        </div>
                                        <div class="ld-sup-10" style="margin-left: 5px">
                                                <h6 class="ld-sup">10</h6>
                                                <div class="med-cm">
                                                        <h6 class="ld-med" style="margin-left: 15px">0</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">2</h6>
                                                        <h6 class="ld-med" style="margin-left: 25px">4</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">6</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">8</h6>
                                                </div>
                                                <div class="cm-2">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-10-0" id="cm-10-0">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-10-2" id="cm-10-2">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-10-4" id="cm-10-4">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-10-6" id="cm-10-6">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-10-8" id="cm-10-8">
                                                </div>

                                        </div>
                                        <div class="ld-sup-11" style="margin-left: 5px">
                                                <h6 class="ld-sup">11</h6>
                                                <div class="med-cm">
                                                        <h6 class="ld-med" style="margin-left: 15px">0</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">2</h6>
                                                        <h6 class="ld-med" style="margin-left: 25px">4</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">6</h6>
                                                        <h6 class="ld-med" style="margin-left: 28px">8</h6>
                                                </div>
                                                <div class="cm-2">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-11-0" id="cm-11-0">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-11-2" id="cm-11-2">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-11-4" id="cm-11-4">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-11-6" id="cm-11-6">
                                                        <input class="cm" type="number" placeholder="0"
                                                                style="width: 37px;" name="cm-11-8" id="cm-11-8">
                                                </div>
                                        </div>

                                </div>
                                <div class="total-boton d-flex">
                                        <div class="total-f1">
                                                <div class="c-total"
                                                        style="margin-left: 500px; margin-top: 20px; width: 200px;  margin-bottom: 20px;">
                                                        <h6 class="total-1" style="background-color: white;">Total</h6>
                                                        <input class="total-sup" type="text" placeholder="0"
                                                                style="width: 200px;" name="total-sup" id="total-sup"
                                                                disabled>
                                                </div>
                                        </div>
                                        <div class="d-flex flex-row justify-content-end">
                                                <div class="p-2">

                                                        <button id="boton-calcular_ld" class="btn btn-outline-info"
                                                                type="button" value="actualizado"
                                                                style="margin-top: 30px; margin-left: 10px">Calcular</button>
                                                </div>
                                        </div>
                                </div>
                        </div>


                </div>
        </div>
</div>
<HR style="margin-top: 5px;">
</HR>
<div class="Container-ld-inf">
        <div class="ld-cm">
                <div class="ld-f2">
                        <div class="fila-1-678 d-flex" style="margin-top: 20px">
                                <div class="ld-sup-6">
                                        <h6 class="ld-sup">6</h6>
                                        <div class="med-cm">
                                                <h6 class="ld-med" style="margin-left: 15px">0</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">2</h6>
                                                <h6 class="ld-med" style="margin-left: 25px">4</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">6</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">8</h6>
                                        </div>
                                        <div class="cm-2">
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-6-0-inf" id="cm-6-0-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-6-2-inf" id="cm-6-2-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-6-4-inf" id="cm-6-4-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-6-6-inf" id="cm-6-6-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" name="cm-6-8-inf"
                                                        id="cm-6-8-inf" style="width: 37px; margin-right: 4px;"
                                                        disabled>
                                        </div>


                                </div>

                                <div class="ld-sup-7" style="margin-left: 5px">
                                        <h6 class="ld-sup">7</h6>
                                        <div class="med-cm">
                                                <h6 class="ld-med" style="margin-left: 15px">0</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">2</h6>
                                                <h6 class="ld-med" style="margin-left: 25px">4</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">6</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">8</h6>
                                        </div>
                                        <div class="cm-2">
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-7-0-inf" id="cm-7-0-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-7-2-inf" id="cm-7-2-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-7-4-inf" id="cm-7-4-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-7-6-inf" id="cm-7-6-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-7-8-inf" id="cm-7-8-inf" disabled>
                                        </div>


                                </div>
                                <div class="ld-sup-8" style="margin-left: 5px">
                                        <h6 class="ld-sup">8</h6>
                                        <div class="med-cm">
                                                <h6 class="ld-med" style="margin-left: 15px">0</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">2</h6>
                                                <h6 class="ld-med" style="margin-left: 25px">4</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">6</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">8</h6>
                                        </div>
                                        <div class="cm-2">
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-8-0-inf" id="cm-8-0-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-8-2-inf" id="cm-8-2-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-8-4-inf" id="cm-8-4-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-8-6-inf" id="cm-8-6-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-8-8-inf" id="cm-8-8-inf" disabled>
                                        </div>


                                </div>
                                <div class="ld-sup-9" style="margin-left: 5px">
                                        <h6 class="ld-sup">9</h6>
                                        <div class="med-cm">
                                                <h6 class="ld-med" style="margin-left: 15px">0</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">2</h6>
                                                <h6 class="ld-med" style="margin-left: 25px">4</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">6</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">8</h6>
                                        </div>
                                        <div class="cm-2">
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-9-0-inf" id="cm-9-0-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-9-2-inf" id="cm-9-2-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-9-4-inf" id="cm-9-4-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-9-6-inf" id="cm-9-6-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-9-8-inf" id="cm-9-8-inf" disabled>
                                        </div>

                                </div>
                                <div class="ld-sup-10" style="margin-left: 5px">
                                        <h6 class="ld-sup">10</h6>
                                        <div class="med-cm">
                                                <h6 class="ld-med" style="margin-left: 15px">0</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">2</h6>
                                                <h6 class="ld-med" style="margin-left: 25px">4</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">6</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">8</h6>
                                        </div>
                                        <div class="cm-2">
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-10-0-inf" id="cm-10-0-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-10-2-inf" id="cm-10-2-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-10-4-inf" id="cm-10-4-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-10-6-inf" id="cm-10-6-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-10-8-inf" id="cm-10-8-inf" disabled>
                                        </div>

                                </div>
                                <div class="ld-sup-11" style="margin-left: 5px">
                                        <h6 class="ld-sup">11</h6>
                                        <div class="med-cm">
                                                <h6 class="ld-med" style="margin-left: 15px">0</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">2</h6>
                                                <h6 class="ld-med" style="margin-left: 25px">4</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">6</h6>
                                                <h6 class="ld-med" style="margin-left: 28px">8</h6>
                                        </div>
                                        <div class="cm-2">
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-11-0-inf" id="cm-11-0-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-11-2-inf" id="cm-11-2-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-11-4-inf" id="cm-11-4-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-11-6-inf" id="cm-11-6-inf" disabled>
                                                <input class="cm" type="text" placeholder="0" style="width: 37px;"
                                                        name="cm-11-8-inf" id="cm-11-8-inf" disabled>
                                        </div>
                                </div>

                        </div>
                        <div class="total-prom-f2 d-flex">
                                <div class="c-total"
                                        style="margin-left: 200px; margin-top: 20px; width: 200px;  margin-bottom: 20px;">
                                        <div class="f2-total">
                                                <div class="inp-total-1">
                                                        <h6 class="total-2" style="background-color: white;">Total</h6>
                                                </div>
                                                <div class="inp-total-2">
                                                        <input class="total-inf" type="text" placeholder="0"
                                                                style="width: 200px;" name="total-inf" id="total-inf" disabled>
                                                </div>
                                        </div>
                                </div>
                                <div class="c-promedio"
                                        style="margin-left: 400px; margin-top: 20px; width: 200px;  margin-bottom: 20px;">
                                        <div class="f2-promedio">
                                                <div class="inp-prom-1">
                                                        <h6 class="promedio-2" style="background-color: white;">Promedio
                                                        </h6>
                                                </div>
                                                <div class="inp-prom-2">
                                                        <input class="promedio-ld" type="text" placeholder="0"
                                                                style="width: 200px;" name="promedio-ld" id="promedio-ld" disabled>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>

                <div class="p-2">

                </div>
        </div>
</div>