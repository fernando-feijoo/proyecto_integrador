<?php
if (($valiacion = cargar_dato_inpeccion()) != false) {
	$sql = cargar_dato_inpeccion();
	$datos_inspeccion = array();
	while ($carga_datos_inspeccion = mysqli_fetch_assoc($sql)) {
		$datos_inspeccion[] = $carga_datos_inspeccion;
	}
?>
	<div class="row mx-auto me-5 ms-5 mt-3">
		<div class="fs-5 fw-semibold">INSPECCION DEL CONTENEDOR</div>
		<div class="d-flex flex-row justify-content-center">
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
						<td class="borde color"> <input class="form-check-input" type="checkbox" name="uno" id="inlineRadio1" value="1" <?php if ($datos_inspeccion[0]['verificacion'] == 1) echo "checked"; ?>></td>
					</tr>
					<tr>
						<td class="borde color">2</td>
						<td class="borde color">Pared Izquierda</td>
						<td class="borde color"><input class="form-check-input" type="checkbox" name="dos" id="inlineRadio2" value="1" <?php if ($datos_inspeccion[1]['verificacion'] == 1) echo "checked"; ?>></td>
					</tr>
					<tr>
						<td class="borde color">3</td>
						<td class="borde color">Espaciadores</td>
						<td class="borde color"><input class="form-check-input" type="checkbox" name="tres" id="inlineRadio3" value="1" <?php if ($datos_inspeccion[2]['verificacion'] == 1) echo "checked"; ?>></td>
					</tr>
					<tr>
						<td class="borde color">4</td>
						<td class="borde color">Pared Frontal</td>
						<td class="borde color"><input class="form-check-input" type="checkbox" name="cuatro" id="inlineRadio4" value="1" <?php if ($datos_inspeccion[3]['verificacion'] == 1) echo "checked"; ?>></td>
					</tr>
					<tr>
						<td class="borde color">5</td>
						<td class="borde color">Pared Derecha</td>
						<td class="borde color"><input class="form-check-input" type="checkbox" name="cinco" id="inlineRadio5" value="1" <?php if ($datos_inspeccion[4]['verificacion'] == 1) echo "checked"; ?>></td>
					</tr>
					<tr>
						<td class="borde color">6</td>
						<td class="borde color">Techo</td>
						<td class="borde color"><input class="form-check-input" type="checkbox" name="seis" id="inlineRadio6" value="1" <?php if ($datos_inspeccion[5]['verificacion'] == 1) echo "checked"; ?>></td>
					</tr>
					<tr>
						<td class="borde color">7</td>
						<td class="borde color">Piso Interior</td>
						<td class="borde color"><input class="form-check-input" type="checkbox" name="siete" id="inlineRadio7" value="1" <?php if ($datos_inspeccion[6]['verificacion'] == 1) echo "checked"; ?>></td>
					</tr>
					<tr>
						<td class="borde color">8</td>
						<td class="borde color">Piso Exterior</td>
						<td class="borde color"><input class="form-check-input" type="checkbox" name="ocho" id="inlineRadio8" value="1" <?php if ($datos_inspeccion[7]['verificacion'] == 1) echo "checked"; ?>></td>
					</tr>
					<tr>
						<td class="borde color">9</td>
						<td class="borde color">Evaporadores</td>
						<td class="borde color"><input class="form-check-input" type="checkbox" name="nueve" id="inlineRadio9" value="1" <?php if ($datos_inspeccion[8]['verificacion'] == 1) echo "checked"; ?>></td>
					</tr>
					<tr>
						<td class="borde color">10</td>
						<td class="borde color">Tornillo Seguridad</td>
						<td class="borde color"><input class="form-check-input" type="checkbox" name="diez" id="inlineRadio10" value="1" <?php if ($datos_inspeccion[9]['verificacion'] == 1) echo "checked"; ?>></td>
					</tr>
					<tr>
						<td class="borde color">11</td>
						<td class="borde color">Delefactor</td>
						<td class="borde color"><input class="form-check-input" type="checkbox" name="once" id="inlineRadio11" value="1" <?php if ($datos_inspeccion[10]['verificacion'] == 1) echo "checked"; ?>></td>
					</tr>
				</tbody>
			</table>
			<img class="foto2" src="../../img/Contenedor.png" />
		</div>
		<div class="text-start fs-5 fw-semibold mt-4">
			Observaciones:
			<textarea class="form-control mt-3" id="observacion_higiene" rows="3"></textarea>
		</div>
	</div>
<?php
} else {
?>
	<div class="row mx-auto me-5 ms-5 mt-3">
		<div class="fs-5 fw-semibold">INSPECCION DEL CONTENEDOR</div>
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
						<td class="borde color"> <input type="checkbox" name="uno" id="puertas" value="1"></td>
					</tr>
					<tr>
						<td class="borde color">2</td>
						<td class="borde color">Pared Izquierda</td>
						<td class="borde color"><input type="checkbox" name="dos" id="p_izquierda" value="1"></td>
					</tr>
					<tr>
						<td class="borde color">3</td>
						<td class="borde color">Espaciadores</td>
						<td class="borde color"><input type="checkbox" name="tres" id="espaciadores" value="1"></td>
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
		<div class="text-start fs-5 fw-semibold mt-4">
			Observaciones:
			<textarea class="form-control mt-3" id="observacion_higiene" rows="3"></textarea>
		</div>
	</div>
<?php
}
?>