<style>
    .pi {
        margin-right: 6px;
    }

    .tot {
        background-color: white;
    }
</style>
<head>

</head>

<script>
    document.getElementById("#formulario_gc").addEventListener("submit", function(event) {
        // Evita que el formulario se envíe de manera convencional
        event.preventDefault();

        // Obtiene los valores de los inputs
        var sup36 = document.getElementById("sup36").value;
        var sup37 = document.getElementById("sup37").value;

        // Crea una instancia del objeto XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Configura la solicitud POST para enviar los valores de los inputs a otro archivo PHP
        xhr.open("POST", "mvc/controlador/Grupo 1/guardar_gc.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("sup36=" + sup36 + "&sup37=" + sup37);

        // Maneja la respuesta del servidor
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // La solicitud se completó exitosamente, haz algo con la respuesta si es necesario
                } else {
                    // La solicitud falló, maneja el error si es necesario
                }
            }
        };
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('#boton-calcular_gc').addEventListener('click', function () {

            const val36 = Number(document.querySelector('#sup36').value);
            const val37 = Number(document.querySelector('#sup37').value);
            const val38 = Number(document.querySelector('#sup38').value);
            const val39 = Number(document.querySelector('#sup39').value);
            const val40 = Number(document.querySelector('#sup40').value);
            const val41 = Number(document.querySelector('#sup41').value);
            const val42 = Number(document.querySelector('#sup42').value);
            const val43 = Number(document.querySelector('#sup43').value);
            const val44 = Number(document.querySelector('#sup44').value);
            const val45 = Number(document.querySelector('#sup45').value);
            const val46 = Number(document.querySelector('#sup46').value);
            const val47 = Number(document.querySelector('#sup47').value);
            const val48 = Number(document.querySelector('#sup48').value);
            const val49 = Number(document.querySelector('#sup49').value);
            const val50 = Number(document.querySelector('#sup50').value);
            const val51 = Number(document.querySelector('#sup51').value);
            const val52 = Number(document.querySelector('#sup52').value);

            // Realizar el cálculo
            const res36 = 36 * val36;
            const res37 = 37 * val37;
            const res38 = 38 * val38;
            const res39 = 39 * val39;
            const res40 = 40 * val40;
            const res41 = 41 * val41;
            const res42 = 42 * val42;
            const res43 = 43 * val43;
            const res44 = 44 * val44;
            const res45 = 45 * val45;
            const res46 = 46 * val46;
            const res47 = 47 * val47;
            const res48 = 48 * val48;
            const res49 = 49 * val49;
            const res50 = 50 * val50;
            const res51 = 51 * val51;
            const res52 = 52 * val52;
            // Mostrar el resultado en el input
            document.querySelector('#inf36').value = res36;
            document.querySelector('#inf37').value = res37;
            document.querySelector('#inf38').value = res38;
            document.querySelector('#inf39').value = res39;
            document.querySelector('#inf40').value = res40;
            document.querySelector('#inf41').value = res41;
            document.querySelector('#inf42').value = res42;
            document.querySelector('#inf43').value = res43;
            document.querySelector('#inf44').value = res44;
            document.querySelector('#inf45').value = res45;
            document.querySelector('#inf46').value = res46;
            document.querySelector('#inf47').value = res47;
            document.querySelector('#inf48').value = res48;
            document.querySelector('#inf49').value = res49;
            document.querySelector('#inf50').value = res50;
            document.querySelector('#inf51').value = res51;
            document.querySelector('#inf52').value = res52;
        });
    });
</script>
<form id="formulario_gc">
    <div class="grado_calibre">
        <div class="Container-f1">
            <h6 class="p-1" style="text-align: left;">Ingrese la cantidad:</h6>
            <div class="row">
                <div class="col-10 d-flex" style="background-color: white; border-top-left-radius : 15px;
             border-bottom-left-radius : 15px; margin-bottom: 10px; padding: 20px;">
                    <div class="defectos d-flex">
                        <div class="c-f1">
                            <h6 class="p-1">-36</h6>
                            <input id="sup36" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup36">
                        </div>
                        <div class="c-f2">
                            <h6 class="p-1">37</h6>
                            <input id="sup37" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup37">
                        </div>
                        <div class="c-f3">
                            <h6 class="p-1">38</h6>
                            <input id="sup38" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup38">
                        </div>
                        <div class="c-f4">
                            <h6 class="p-1">39</h6>
                            <input id="sup39" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup39">
                        </div>
                        <div class="c-f5">
                            <h6 class="p-1">40</h6>
                            <input id="sup40" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup40">
                        </div>
                        <div class="c-f6">
                            <h6 class="p-1">41</h6>
                            <input id="sup41" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup41">
                        </div>
                        <div class="c-f7">
                            <h6 class="p-1">42</h6>
                            <input id="sup42" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup42">
                        </div>
                        <div class="c-f8">
                            <h6 class="p-1">43</h6>
                            <input id="sup43" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup43">
                        </div>
                        <div class="c-f9">
                            <h6 class="p-1">44</h6>
                            <input id="sup44" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup44">
                        </div>
                        <div class="c-f10">
                            <h6 class="p-1">45</h6>
                            <input id="sup45" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup45">
                        </div>
                        <div class="c-f11">
                            <h6 class="p-1">46</h6>
                            <input id="sup46" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup46">
                        </div>
                        <div class="c-f12">
                            <h6 class="p-1">47</h6>
                            <input id="sup47" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup47">
                        </div>
                        <div class="c-f13">
                            <h6 class="p-1">48</h6>
                            <input id="sup48" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup48">
                        </div>
                        <div class="c-f14">
                            <h6 class="p-1">49</h6>
                            <input id="sup49" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup49">
                        </div>
                        <div class="c-f15">
                            <h6 class="p-1">50</h6>
                            <input id="sup50" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup50">
                        </div>
                        <div class="c-f16">
                            <h6 class="p-1">51</h6>
                            <input id="sup51" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup51">
                        </div>
                        <div class="c-f17">
                            <h6 class="p-1">+52</h6>
                            <input id="sup52" class="pi" type="number" placeholder="0"
                                style="width: 40px; margin-top: 5px;" name="sup52">
                        </div>



                    </div>
                </div>
                <div class="col-2 d-flex" style="background-color: lightgray; border-top-right-radius : 15px;
                border-bottom-right-radius : 15px; margin-bottom: 10px; padding: 20px;">
                    <div class="f2-total">
                        <div class="c-total">
                            <h6 class="p-1">Total</h6>
                            <input class="tot" type="text" placeholder="0" style="width: 50px; margin-top: 5px;"
                                disabled>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <div class="p-2">

                            <button id="boton-calcular_gc" class="btn btn-outline-info" type="button"
                                value="actualizado">Calcular</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <HR>
        </HR>

        <div class="Container-f2">
            <div class="row">
                <div class="col-10 d-flex" style="background-color: white; border-top-left-radius : 15px;
                border-bottom-left-radius : 15px; margin-top: 10px; padding: 20px;">
                    <div class="defectos d-flex">
                        <div class="c1-f2">
                            <h6 class="p-1">-36</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px; margin-right: 2px;" name="inf36" id="inf36"
                                disabled>
                        </div>
                        <div class="c2-f2">
                            <h6 class="p-1">37</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;" name="inf37" id="inf37"
                                disabled>
                        </div>
                        <div class="c3-f2">
                            <h6 class="p-1">38</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;" name="inf38" id="inf38"
                                disabled>
                        </div>
                        <div class="c4-f2">
                            <h6 class="p-1">39</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;" name="inf39" id="inf39"
                                disabled>
                        </div>
                        <div class="c5-f2">
                            <h6 class="p-1">40</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px; margin-right: 2px;;" name="inf40" id="inf40"
                                disabled>
                        </div>
                        <div class="c6-f2">
                            <h6 class="p-1">41</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px; margin-right: 2px;;" name="inf41" id="inf41"
                                disabled>
                        </div>
                        <div class="c7-f2">
                            <h6 class="p-1">42</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf42" id="inf42"
                                disabled>
                        </div>
                        <div class="c8-f2">
                            <h6 class="p-1">43</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf43" id="inf43"
                                disabled>
                        </div>
                        <div class="c9-f2">
                            <h6 class="p-1">44</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf44" id="inf44"
                                disabled>
                        </div>
                        <div class="c10-f2">
                            <h6 class="p-1">45</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf45" id="inf45"
                                disabled>
                        </div>
                        <div class="c11-f2">
                            <h6 class="p-1">46</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf46" id="inf46"
                                disabled>
                        </div>
                        <div class="c12-f2">
                            <h6 class="p-1">47</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf47" id="inf47"
                                disabled>
                        </div>
                        <div class="c13-f2">
                            <h6 class="p-1">48</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf48" id="inf48"
                                disabled>
                        </div>
                        <div class="c14-f2">
                            <h6 class="p-1">49</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf49" id="inf49"
                                disabled>
                        </div>
                        <div class="c15-f2">
                            <h6 class="p-1">50</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf50" id="inf50"
                                disabled>
                        </div>
                        <div class="c16-f2">
                            <h6 class="p-1">51</h6>
                            <input class="pi" type="text" placeholder="0"
                                style="width: 44px; margin-top: 5px;  margin-right: 2px;" name="inf51" id="inf51"
                                disabled>
                        </div>
                        <div class="c17-f2">
                            <h6 class="p-1">+52</h6>
                            <input class="pi" type="text" placeholder="0" style="width: 44px; margin-top: 5px;"
                                name="inf52" id="inf52" disabled>
                        </div>
                    </div>
                </div>

                <div class="col-2 d-flex" style="background-color: lightgray; border-top-right-radius : 15px;
    border-bottom-right-radius : 15px; margin-top: 10px; padding: 20px;">
                    <div class="f2-total">
                        <div class="c-total">
                            <h6 class="p-1">Total</h6>
                            <input class="tot" type="text" placeholder="0" style="width: 50px; margin-top: 5px;"
                                disabled>
                        </div>
                    </div>
                    <div class="f2-promedio">
                        <div class="c-promedio">
                            <h6 class="p-1">Promedio</h6>
                            <input class="tot" type="text" placeholder="0" style="width: 50px; margin-top: 5px;"
                                disabled>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="d-flex flex-row justify-content-end">
            <div class="p-2">

                <button id="guardar_gc" class="btn btn-outline-info" type="submit
                " name="guardar_gc"
                    value="actualizado">Guardar</button>

            </div>
        </div>
    </div>
</form>
