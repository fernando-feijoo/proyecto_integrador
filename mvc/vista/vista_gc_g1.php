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
            const total_sup = val36 + val37 + val38 + val39 + val40 + val41 + val42 + val43 + val44 + val45 + val46 + val47 + val48 + val49 + val50 + val51 + val52;
            const total_inf = res36 + res37 + res38 + res39 + res40 + res41 + res42 + res43 + res44 + res45 + res46 + res47 + res48 + res49 + res50 + res51 + res52;
            const prom = total_inf / total_sup;

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
            document.querySelector('#total_sup').value = total_sup;
            document.querySelector('#total_inf').value = total_inf;
            document.querySelector('#prom').value = prom;

        });
    });
</script>
<?php
if (($validacion = cargar_gc1()) != false and ($validacion2 = cargar_gc2()) != false) {
  $sql_gc1 = cargar_gc1();
  $sql_gc2 = cargar_gc2();
  while ($fila1 = $sql_gc1->fetch_object() and $fila2 = $sql_gc2->fetch_object()) {
  ?>
    <div class="grado_calibre">
    <div class="Container-f1">
        <h6 class="p-1" style="text-align: left;">Ingrese la cantidad:</h6>
        <div class="row">
            <div class="col-10 d-flex" style="background-color: white; border-top-left-radius : 15px;
             border-bottom-left-radius : 15px; margin-bottom: 10px; padding: 20px;">
                <div class="defectos d-flex">
                    <div class="c-f1">
                        <h6 class="p-1">-36</h6>
                        <input id="sup36" class="pi" type="number" value="<?= $fila1->d36?>" style="width: 40px; margin-top: 5px;"
                            name="sup36">
                    </div>
                    <div class="c-f2">
                        <h6 class="p-1">37</h6>
                        <input id="sup37" class="pi" type="number" value="<?= $fila1->d37?>" style="width: 40px; margin-top: 5px;"
                            name="sup37">
                    </div>
                    <div class="c-f3">
                        <h6 class="p-1">38</h6>
                        <input id="sup38" class="pi" type="number" value="<?= $fila1->d38?>" style="width: 40px; margin-top: 5px;"
                            name="sup38">
                    </div>
                    <div class="c-f4">
                        <h6 class="p-1">39</h6>
                        <input id="sup39" class="pi" type="number" value="<?= $fila1->d39?>" style="width: 40px; margin-top: 5px;"
                            name="sup39">
                    </div>
                    <div class="c-f5">
                        <h6 class="p-1">40</h6>
                        <input id="sup40" class="pi" type="number" value="<?= $fila1->d40?>" style="width: 40px; margin-top: 5px;"
                            name="sup40">
                    </div>
                    <div class="c-f6">
                        <h6 class="p-1">41</h6>
                        <input id="sup41" class="pi" type="number" value="<?= $fila1->d41?>" style="width: 40px; margin-top: 5px;"
                            name="sup41">
                    </div>
                    <div class="c-f7">
                        <h6 class="p-1">42</h6>
                        <input id="sup42" class="pi" type="number" value="<?= $fila1->d42?>" style="width: 40px; margin-top: 5px;"
                            name="sup42">
                    </div>
                    <div class="c-f8">
                        <h6 class="p-1">43</h6>
                        <input id="sup43" class="pi" type="number" value="<?= $fila1->d43?>" style="width: 40px; margin-top: 5px;"
                            name="sup43">
                    </div>
                    <div class="c-f9">
                        <h6 class="p-1">44</h6>
                        <input id="sup44" class="pi" type="number" value="<?= $fila1->d44?>" style="width: 40px; margin-top: 5px;"
                            name="sup44">
                    </div>
                    <div class="c-f10">
                        <h6 class="p-1">45</h6>
                        <input id="sup45" class="pi" type="number" value="<?= $fila1->d45?>" style="width: 40px; margin-top: 5px;"
                            name="sup45">
                    </div>
                    <div class="c-f11">
                        <h6 class="p-1">46</h6>
                        <input id="sup46" class="pi" type="number" value="<?= $fila1->d46?>" style="width: 40px; margin-top: 5px;"
                            name="sup46">
                    </div>
                    <div class="c-f12">
                        <h6 class="p-1">47</h6>
                        <input id="sup47" class="pi" type="number" value="<?= $fila1->d47?>" style="width: 40px; margin-top: 5px;"
                            name="sup47">
                    </div>
                    <div class="c-f13">
                        <h6 class="p-1">48</h6>
                        <input id="sup48" class="pi" type="number" value="<?= $fila1->d48?>" style="width: 40px; margin-top: 5px;"
                            name="sup48">
                    </div>
                    <div class="c-f14">
                        <h6 class="p-1">49</h6>
                        <input id="sup49" class="pi" type="number" value="<?= $fila1->d49?>" style="width: 40px; margin-top: 5px;"
                            name="sup49">
                    </div>
                    <div class="c-f15">
                        <h6 class="p-1">50</h6>
                        <input id="sup50" class="pi" type="number" value="<?= $fila1->d50?>" style="width: 40px; margin-top: 5px;"
                            name="sup50">
                    </div>
                    <div class="c-f16">
                        <h6 class="p-1">51</h6>
                        <input id="sup51" class="pi" type="number" value="<?= $fila1->d51?>" style="width: 40px; margin-top: 5px;"
                            name="sup51">
                    </div>
                    <div class="c-f17">
                        <h6 class="p-1">+52</h6>
                        <input id="sup52" class="pi" type="number" value="<?= $fila1->d52?>" style="width: 40px; margin-top: 5px;"
                            name="sup52">
                    </div>

                </div>
            </div>
            <div class="col-2 d-flex" style="background-color: lightgray; border-top-right-radius : 15px;
                border-bottom-right-radius : 15px; margin-bottom: 10px; padding: 20px;">
                <div class="f2-total">
                    <div class="c-total">
                        <h6 class="p-1">Total</h6>
                        <input class="tot" type="text" value="<?= $fila1->total_gc?>" name="total_sup" id="total_sup"
                            style="width: 50px; margin-top: 5px; background-color: rgb(234, 234, 234); border: none;" readonly>
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
                        <input class="pi" type="text" value="<?= $fila2->d36?>"
                            style="width: 44px; margin-top: 5px; margin-right: 2px;" name="inf36" id="inf36" readonly >
                    </div>
                    <div class="c2-f2">
                        <h6 class="p-1">37</h6>
                        <input class="pi" type="text" value="<?= $fila2->d37?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;" name="inf37" id="inf37" readonly>
                    </div>
                    <div class="c3-f2">
                        <h6 class="p-1">38</h6>
                        <input class="pi" type="text" value="<?= $fila2->d38?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;" name="inf38" id="inf38" readonly>
                    </div>
                    <div class="c4-f2">
                        <h6 class="p-1">39</h6>
                        <input class="pi" type="text" value="<?= $fila2->d39?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;" name="inf39" id="inf39" readonly>
                    </div>
                    <div class="c5-f2">
                        <h6 class="p-1">40</h6>
                        <input class="pi" type="text" value="<?= $fila2->d40?>"
                            style="width: 44px; margin-top: 5px; margin-right: 2px;;" name="inf40" id="inf40" readonly>
                    </div>
                    <div class="c6-f2">
                        <h6 class="p-1">41</h6>
                        <input class="pi" type="text" value="<?= $fila2->d41?>"
                            style="width: 44px; margin-top: 5px; margin-right: 2px;;" name="inf41" id="inf41" readonly>
                    </div>
                    <div class="c7-f2">
                        <h6 class="p-1">42</h6>
                        <input class="pi" type="text" value="<?= $fila2->d42?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf42" id="inf42" readonly>
                    </div>
                    <div class="c8-f2">
                        <h6 class="p-1">43</h6>
                        <input class="pi" type="text" value="<?= $fila2->d43?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf43" id="inf43" readonly>
                    </div>
                    <div class="c9-f2">
                        <h6 class="p-1">44</h6>
                        <input class="pi" type="text" value="<?= $fila2->d44?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf44" id="inf44" readonly>
                    </div>
                    <div class="c10-f2">
                        <h6 class="p-1">45</h6>
                        <input class="pi" type="text" value="<?= $fila2->d45?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf45" id="inf45" readonly>
                    </div>
                    <div class="c11-f2">
                        <h6 class="p-1">46</h6>
                        <input class="pi" type="text" value="<?= $fila2->d46?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf46" id="inf46" readonly>
                    </div>
                    <div class="c12-f2">
                        <h6 class="p-1">47</h6>
                        <input class="pi" type="text" value="<?= $fila2->d47?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf47" id="inf47" readonly>
                    </div>
                    <div class="c13-f2">
                        <h6 class="p-1">48</h6>
                        <input class="pi" type="text" value="<?= $fila2->d48?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf48" id="inf48" readonly>
                    </div>
                    <div class="c14-f2">
                        <h6 class="p-1">49</h6>
                        <input class="pi" type="text" value="<?= $fila2->d49?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf49" id="inf49" readonly>
                    </div>
                    <div class="c15-f2">
                        <h6 class="p-1">50</h6>
                        <input class="pi" type="text" value="<?= $fila2->d50?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf50" id="inf50" readonly>
                    </div>
                    <div class="c16-f2">
                        <h6 class="p-1">51</h6>
                        <input class="pi" type="text" value="<?= $fila2->d51?>"
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;" name="inf51" id="inf51" readonly>
                    </div>
                    <div class="c17-f2">
                        <h6 class="p-1">+52</h6>
                        <input class="pi" type="text" value="<?= $fila2->d52?>" style="width: 44px; margin-top: 5px;" name="inf52"
                            id="inf52" readonly>
                    </div>
                </div>
            </div>

            <div class="col-2 d-flex" style="background-color: lightgray; border-top-right-radius : 15px;
    border-bottom-right-radius : 15px; margin-top: 10px; padding: 20px;">
                <div class="f2-total">
                    <div class="c-total">
                        <h6 class="p-1">Total</h6>
                        <input type="text" value="<?= $fila2->total_gc_op?>" id="total_inf" name="total_inf"
                            style="width: 50px; margin-top: 5px; background-color: rgb(234, 234, 234); border: none;" readonly>
                    </div>
                </div>
                <div class="f2-promedio">
                    <div class="c-promedio">
                        <h6 class="p-1">Promedio</h6>
                        <input type="text" value="<?= $fila2->promedio?>" id="prom" name="promedio_inf" class="prom" style="width: 50px; margin-top: 5px; background-color: rgb(234, 234, 234); border: none;"
                        readonly>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
  <?php }}else{?>

<div class="grado_calibre">
    <div class="Container-f1">
        <h6 class="p-1" style="text-align: left;">Ingrese la cantidad:</h6>
        <div class="row">
            <div class="col-10 d-flex" style="background-color: white; border-top-left-radius : 15px;
             border-bottom-left-radius : 15px; margin-bottom: 10px; padding: 20px;">
                <div class="defectos d-flex">
                    <div class="c-f1">
                        <h6 class="p-1">-36</h6>
                        <input id="sup36" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup36">
                    </div>
                    <div class="c-f2">
                        <h6 class="p-1">37</h6>
                        <input id="sup37" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup37">
                    </div>
                    <div class="c-f3">
                        <h6 class="p-1">38</h6>
                        <input id="sup38" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup38">
                    </div>
                    <div class="c-f4">
                        <h6 class="p-1">38</h6>
                        <input id="sup39" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup39">
                    </div>
                    <div class="c-f5">
                        <h6 class="p-1">40</h6>
                        <input id="sup40" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup40">
                    </div>
                    <div class="c-f6">
                        <h6 class="p-1">41</h6>
                        <input id="sup41" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup41">
                    </div>
                    <div class="c-f7">
                        <h6 class="p-1">42</h6>
                        <input id="sup42" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup42">
                    </div>
                    <div class="c-f8">
                        <h6 class="p-1">43</h6>
                        <input id="sup43" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup43">
                    </div>
                    <div class="c-f9">
                        <h6 class="p-1">44</h6>
                        <input id="sup44" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup44">
                    </div>
                    <div class="c-f10">
                        <h6 class="p-1">45</h6>
                        <input id="sup45" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup45">
                    </div>
                    <div class="c-f11">
                        <h6 class="p-1">46</h6>
                        <input id="sup46" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup46">
                    </div>
                    <div class="c-f12">
                        <h6 class="p-1">47</h6>
                        <input id="sup47" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup47">
                    </div>
                    <div class="c-f13">
                        <h6 class="p-1">48</h6>
                        <input id="sup48" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup48">
                    </div>
                    <div class="c-f14">
                        <h6 class="p-1">49</h6>
                        <input id="sup49" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup49">
                    </div>
                    <div class="c-f15">
                        <h6 class="p-1">50</h6>
                        <input id="sup50" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup50">
                    </div>
                    <div class="c-f16">
                        <h6 class="p-1">51</h6>
                        <input id="sup51" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup51">
                    </div>
                    <div class="c-f17">
                        <h6 class="p-1">+52</h6>
                        <input id="sup52" class="pi" type="number" value=" " style="width: 40px; margin-top: 5px;"
                            name="sup52">
                    </div>

                </div>
            </div>
            <div class="col-2 d-flex" style="background-color: lightgray; border-top-right-radius : 15px;
                border-bottom-right-radius : 15px; margin-bottom: 10px; padding: 20px;">
                <div class="f2-total">
                    <div class="c-total">
                        <h6 class="p-1">Total</h6>
                        <input class="tot" type="text" value=" " name="total_sup" id="total_sup"
                            style="width: 50px; margin-top: 5px; background-color: rgb(234, 234, 234); border: none;" readonly>
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
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px; margin-right: 2px;" name="inf36" id="inf36" readonly >
                    </div>
                    <div class="c2-f2">
                        <h6 class="p-1">37</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;" name="inf37" id="inf37" readonly>
                    </div>
                    <div class="c3-f2">
                        <h6 class="p-1">38</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;" name="inf38" id="inf38" readonly>
                    </div>
                    <div class="c4-f2">
                        <h6 class="p-1">39</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;" name="inf39" id="inf39" readonly>
                    </div>
                    <div class="c5-f2">
                        <h6 class="p-1">40</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px; margin-right: 2px;;" name="inf40" id="inf40" readonly>
                    </div>
                    <div class="c6-f2">
                        <h6 class="p-1">41</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px; margin-right: 2px;;" name="inf41" id="inf41" readonly>
                    </div>
                    <div class="c7-f2">
                        <h6 class="p-1">42</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf42" id="inf42" readonly>
                    </div>
                    <div class="c8-f2">
                        <h6 class="p-1">43</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf43" id="inf43" readonly>
                    </div>
                    <div class="c9-f2">
                        <h6 class="p-1">44</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf44" id="inf44" readonly>
                    </div>
                    <div class="c10-f2">
                        <h6 class="p-1">45</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf45" id="inf45" readonly>
                    </div>
                    <div class="c11-f2">
                        <h6 class="p-1">46</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf46" id="inf46" readonly>
                    </div>
                    <div class="c12-f2">
                        <h6 class="p-1">47</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf47" id="inf47" readonly>
                    </div>
                    <div class="c13-f2">
                        <h6 class="p-1">48</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf48" id="inf48" readonly>
                    </div>
                    <div class="c14-f2">
                        <h6 class="p-1">49</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf49" id="inf49" readonly>
                    </div>
                    <div class="c15-f2">
                        <h6 class="p-1">50</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;;" name="inf50" id="inf50" readonly>
                    </div>
                    <div class="c16-f2">
                        <h6 class="p-1">51</h6>
                        <input class="pi" type="text" value=" "
                            style="width: 44px; margin-top: 5px;  margin-right: 2px;" name="inf51" id="inf51" readonly>
                    </div>
                    <div class="c17-f2">
                        <h6 class="p-1">+52</h6>
                        <input class="pi" type="text" value=" " style="width: 44px; margin-top: 5px;" name="inf52"
                            id="inf52" readonly>
                    </div>
                </div>
            </div>

            <div class="col-2 d-flex" style="background-color: lightgray; border-top-right-radius : 15px;
    border-bottom-right-radius : 15px; margin-top: 10px; padding: 20px;">
                <div class="f2-total">
                    <div class="c-total">
                        <h6 class="p-1">Total</h6>
                        <input type="text" value=" " id="total_inf" name="total_inf"
                            style="width: 50px; margin-top: 5px; background-color: rgb(234, 234, 234); border: none;" readonly>
                    </div>
                </div>
                <div class="f2-promedio">
                    <div class="c-promedio">
                        <h6 class="p-1">Promedio</h6>
                        <input type="text" value=" " id="prom" name="promedio_inf" class="prom" style="width: 50px; margin-top: 5px; background-color: rgb(234, 234, 234); border: none;"
                        readonly>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php }?>