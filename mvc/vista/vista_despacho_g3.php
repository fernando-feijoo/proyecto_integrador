<?php
if (($valiacion = carga_datos_despacho()) != false) {
	$sql = carga_datos_despacho();
	while ($carga_datos_despacho = $sql->fetch_object()) {
?>
		<div class="row mx-auto me-5 ms-5 mt-3">
			<div class="fs-5 fw-semibold">DESPACHO</div>
			<div class="d-flex flex-row justify-content-center">

				<div class="form-check form-check-inline fw-bold mt-2">
					Filtro:
				</div>
				<!-- Opciones de seleccion de radio button -->
				<div class="form-check form-check-inline mt-2" style="margin-left: -10px;">
					<input class="form-check-input" type="radio" name="inlineRadioOptions_fg3" id="inlineRadio1" value="1" <?php if ($carga_datos_despacho->filtro == "1") echo "checked"; ?>>
					<label class="form-check-label" for="inlineRadio1">1</label>
				</div>
				<div class="form-check form-check-inline mt-2" style="margin-left: -10px;">
					<input class="form-check-input" type="radio" name="inlineRadioOptions_fg3" id="inlineRadio2" value="2" <?php if ($carga_datos_despacho->filtro == "2") echo "checked"; ?>>
					<label class="form-check-label" for="inlineRadio2">2</label>
				</div>
				<div class="form-check form-check-inline mt-2" style="margin-left: -10px;">
					<input class="form-check-input" type="radio" name="inlineRadioOptions_fg3" id="inlineRadio3" value="NINGUNO" <?php if ($carga_datos_despacho->filtro == "NINGUNO") echo "checked"; ?>>
					<label class="form-check-label" for="inlineRadio3">Ninguno</label>
				</div>
				<!-- /Opciones de seleccion de radio button -->

				<div class="form-check form-check-inline fw-bold mt-2" style="margin-left: -25px;">
					Termografo:
				</div>
				<!-- Opciones de seleccion de radio button -->
				<div class="form-check form-check-inline mt-2" style="margin-left: -10px;">
					<input class="form-check-input" type="radio" name="inlineRadioOptions_tg3" id="inlineRadio1" value="P19" <?php if ($carga_datos_despacho->termografo == "P19") echo "checked"; ?>>
					<label class="form-check-label" for="inlineRadio1">P19</label>
				</div>
				<div class="form-check form-check-inline mt-2" style="margin-left: -10px;">
					<input class="form-check-input" type="radio" name="inlineRadioOptions_tg3" id="inlineRadio2" value="P18" <?php if ($carga_datos_despacho->termografo == "P18") echo "checked"; ?>>
					<label class="form-check-label" for="inlineRadio2">P18</label>
				</div>
				<div class="form-check form-check-inline mt-2" style="margin-left: -10px;">
					<input class="form-check-input" type="radio" name="inlineRadioOptions_tg3" id="inlineRadio3" value="NINGUNO" <?php if ($carga_datos_despacho->termografo == "NINGUNO") echo "checked"; ?>>
					<label class="form-check-label me-2" for="inlineRadio3">Ninguno</label>
				</div>
				<!-- /Opciones de seleccion de radio button -->

				<div class="p-1">Termografo#:
					<input class="text-uppercase" type="text" style="width: 182px; height: 36px;" name="termografo_num" value="<?= $carga_datos_despacho->termografo_numero ?>">
				</div>
			</div>

			<div class="d-flex flex-row justify-content-center  ">
				<div class="p-1">Sello Adhesivo:
					<input type="text" style="width: 405px; height: 36px;" name="sello_adhesivo" value="<?= $carga_datos_despacho->sello_adhesivo ?>">
				</div>
				<div class="p-1"> Sello Verificador:
					<input class="text-uppercase" type="text" style="width: 200px; height: 36px;;" name="sello_vericador" value="<?= $carga_datos_despacho->sello_verificador ?>">
				</div>
			</div>

			<div class="d-flex flex-row justify-content-center ">
				<div class="p-1"> Sello Exportador Candado:
					<input class="text-uppercase" type="text" style="width: 270px; height: 36px;" name="sello_expotador_candado" value="<?= $carga_datos_despacho->sello_exp_candado ?>">
				</div>
				<div class="p-1"> Fecha y Hora Salida:
					<input type="datetime-local" style="height: 36px;" name="fecha_hora_salida" value=<?= date("Y-m-d\TH:i:s", strtotime($carga_datos_despacho->fecha_hora_salida)) ?>>
				</div>
			</div>

			<div class="d-flex flex-row justify-content-center  ">
				<div class="p-1"> Sello Exportador cable:
					<input class="text-uppercase" type="text" style="width: 250px; height: 36px;" name="sello_cable" value="<?= $carga_datos_despacho->sello_exp_cable ?>">
				</div>
				<div class="p-1"> Compañia Transportista:
					<input class="text-uppercase" type="text" style="width: 250px; height: 36px;" name="trasnportista" value="<?= $carga_datos_despacho->compania_transportista ?>">
				</div>
			</div>

			<div class="d-flex flex-row justify-content-center  ">
				<div class="p-1"> Sello Nave:
					<input class="text-uppercase" type="text" style="width: 245px; height: 36px;" name="sello_nave" value="<?= $carga_datos_despacho->sello_naviero ?>">
				</div>
				<div class="p-1"> Vapor:
					<input class="text-uppercase" type="text" style="width: 195px; height: 36px;" name="vapor" value="<?= $carga_datos_despacho->vapor ?>">
				</div>
				<div class="p-1"> Destino:
					<input class="text-uppercase" type="text" style="width: 195px; height: 36px;" name="destino" value="<?= $carga_datos_despacho->destino ?>">
				</div>
			</div>

			<?php
			// Este algoritmo traer el campo 1;2;1;2 y lo divide en un array para luego poderlo mostrar.
			$paletizadores = $carga_datos_despacho->paletizadores;
			$array_paletizadores = explode(";", $paletizadores);
			$array_paletizadores = array_pad($array_paletizadores, 4, 0);
			?>

			<div class="d-flex flex-row justify-content-center   ">
				<div class="p-1"> Nombre de Paletizadores:
					<select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="paletizador1">
						<option selected>Seleccione</option>
						<?php
						$sql_despacho =  datos_lista_paletizador();
						while ($datos_paletizador = $sql_despacho->fetch_object()) {
						?>
							<option value=<?= $datos_paletizador->id ?> <?= ($datos_paletizador->id == $array_paletizadores[0]) ? "selected" : "" ?>><?= $datos_paletizador->nombres ?></option>
						<?php
						}
						?>
					</select>
					<select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="paletizador2">
						<option selected>Seleccione</option>
						<?php
						$sql_despacho =  datos_lista_paletizador();
						while ($datos_paletizador = $sql_despacho->fetch_object()) {
						?>
							<option value=<?= $datos_paletizador->id ?> <?= ($datos_paletizador->id == $array_paletizadores[1]) ? "selected" : "" ?>><?= $datos_paletizador->nombres ?></option>
						<?php
						}
						?>
					</select>
					<select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="paletizador3">
						<option selected>Seleccione</option>
						<?php
						$sql_despacho =  datos_lista_paletizador();
						while ($datos_paletizador = $sql_despacho->fetch_object()) {
						?>
							<option value=<?= $datos_paletizador->id ?> <?= ($datos_paletizador->id == $array_paletizadores[2]) ? "selected" : "" ?>><?= $datos_paletizador->nombres ?></option>
						<?php
						}
						?>
					</select>
					<select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="paletizador4">
						<option selected>Seleccione</option>
						<?php
						$sql_despacho =  datos_lista_paletizador();
						while ($datos_paletizador = $sql_despacho->fetch_object()) {
						?>
							<option value=<?= $datos_paletizador->id ?> <?= ($datos_paletizador->id == $array_paletizadores[3]) ? "selected" : "" ?>><?= $datos_paletizador->nombres ?></option>
						<?php
						}
						?>
					</select>
				</div>
			</div>

			<div class="d-flex flex-row justify-content-center">
				<div class="p-1">Total a Viajar:
					<input type="number" style="width: 150px; height: 36px;" name="total_viajar" value="<?= $carga_datos_despacho->total_viajar ?>">
				</div>
				<div class="p-1">Cajas:
					<input type="number" style="width: 195px; height: 36px;" name="cajas" value="<?= $carga_datos_despacho->cajas ?>">
				</div>
				<div class="p-1"> Cantidad de Pallet:
					<input type="number" style="width: 200px; height: 36px;" name="cantidad_pallet" value="<?= $carga_datos_despacho->cantidad_palet ?>">
				</div>
			</div>

			<div class="text-start  fs-5 fw-semibold mt-5">
				Observaciones:
				<textarea class="text-uppercase form-control mt-3" name="observacion_despacho" rows="3"><?php echo $carga_datos_despacho->observacion_despacho; ?></textarea>
			</div>
		</div>
	<?php
	}
} else {
	?>
	<div class="row mx-auto me-5 ms-5 mt-3">
		<div class="fs-5 fw-semibold">DESPACHO</div>
		<div class="d-flex flex-row justify-content-center">

			<div class="form-check form-check-inline fw-bold mt-2">
				Filtro:
			</div>
			<!-- Opciones de seleccion de radio button -->
			<div class="form-check form-check-inline mt-2" style="margin-left: -10px;">
				<input class="form-check-input" type="radio" name="inlineRadioOptions_fg3" id="inlineRadio1" value="1">
				<label class="form-check-label" for="inlineRadio1">1</label>
			</div>
			<div class="form-check form-check-inline mt-2" style="margin-left: -10px;">
				<input class="form-check-input" type="radio" name="inlineRadioOptions_fg3" id="inlineRadio2" value="2">
				<label class="form-check-label" for="inlineRadio2">2</label>
			</div>
			<div class="form-check form-check-inline mt-2" style="margin-left: -10px;">
				<input class="form-check-input" type="radio" name="inlineRadioOptions_fg3" id="inlineRadio3" value="NINGUNO">
				<label class="form-check-label" for="inlineRadio3">Ninguno</label>
			</div>
			<!-- /Opciones de seleccion de radio button -->

			<div class="form-check form-check-inline fw-bold mt-2" style="margin-left: -25px;">
				Termografo:
			</div>
			<!-- Opciones de seleccion de radio button -->
			<div class="form-check form-check-inline mt-2" style="margin-left: -10px;">
				<input class="form-check-input" type="radio" name="inlineRadioOptions_tg3" id="inlineRadio1" value="P19">
				<label class="form-check-label" for="inlineRadio1">P19</label>
			</div>
			<div class="form-check form-check-inline mt-2" style="margin-left: -10px;">
				<input class="form-check-input" type="radio" name="inlineRadioOptions_tg3" id="inlineRadio2" value="P18">
				<label class="form-check-label" for="inlineRadio2">P18</label>
			</div>
			<div class="form-check form-check-inline mt-2" style="margin-left: -10px;">
				<input class="form-check-input" type="radio" name="inlineRadioOptions_tg3" id="inlineRadio3" value="NINGUNO">
				<label class="form-check-label me-2" for="inlineRadio3">Ninguno</label>
			</div>
			<!-- /Opciones de seleccion de radio button -->

			<div class="p-1">Termografo#:
				<input class="text-uppercase" type="text" style="width: 182px; height: 36px;" name="termografo_num" id="TERMOGRAFO_NUM">
			</div>
		</div>

		<div class="d-flex flex-row justify-content-center">
			<div class="p-1">Sello Adhesivo:
				<input class="text-uppercase" type="text" style="width: 405px; height: 36px;" name="sello_adhesivo" id="sello_adhesivo1">
			</div>
			<div class="p-1"> Sello Verificador:
				<input class="text-uppercase" type="text" style="width: 200px; height: 36px;;" name="sello_vericador" id="sello_vericador1">
			</div>
		</div>

		<div class="d-flex flex-row justify-content-center">
			<div class="p-1"> Sello Exportador Candado:
				<input class="text-uppercase" type="text" style="width: 270px; height: 36px;" name="sello_expotador_candado" id="sello_expotador_candado1">
			</div>
			<div class="p-1"> Fecha y Hora Salida:
				<input type="datetime-local" style="height: 36px;" name="fecha_hora_salida">
			</div>
		</div>

		<div class="d-flex flex-row justify-content-center">
			<div class="p-1"> Sello Exportador cable:
				<input class="text-uppercase" type="text" style="width: 250px; height: 36px;" name="sello_cable" id="sello_cable1">
			</div>
			<div class="p-1"> Compañia Transportista:
				<input class="text-uppercase" type="text" style="width: 250px; height: 36px;" name="trasnportista" id="transportista1">
			</div>
		</div>

		<div class="d-flex flex-row justify-content-center">
			<div class="p-1"> Sello Nave:
				<input class="text-uppercase" type="text" style="width: 245px; height: 36px;" name="sello_nave" id="sello_nave1">
			</div>
			<div class="p-1"> Vapor:
				<input class="text-uppercase" type="text" style="width: 195px; height: 36px;" name="vapor" id="vapor1">
			</div>
			<div class="p-1"> Destino:
				<input class="text-uppercase" type="text" style="width: 195px; height: 36px;" name="destino" id="Destino1">
			</div>
		</div>

		<div class="d-flex flex-row justify-content-center">
			<div class="p-1"> Nombre de Paletizadores:
				<select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="paletizador1">
					<option selected>Seleccione</option>
					<?php
					$sql_despacho =  datos_lista_paletizador();
					while ($datos_paletizador = $sql_despacho->fetch_object()) {
					?>
						<option value=<?= $datos_paletizador->id ?>><?= $datos_paletizador->nombres ?></option>
					<?php
					}
					?>
				</select>
				<select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="paletizador2">
					<option selected>Seleccione</option>
					<?php
					$sql_despacho =  datos_lista_paletizador();
					while ($datos_paletizador = $sql_despacho->fetch_object()) {
					?>
						<option value=<?= $datos_paletizador->id ?>><?= $datos_paletizador->nombres ?></option>
					<?php
					}
					?>
				</select>
				<select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="paletizador3">
					<option selected>Seleccione</option>
					<?php
					$sql_despacho =  datos_lista_paletizador();
					while ($datos_paletizador = $sql_despacho->fetch_object()) {
					?>
						<option value=<?= $datos_paletizador->id ?>><?= $datos_paletizador->nombres ?></option>
					<?php
					}
					?>
				</select>
				<select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="paletizador4">
					<option selected>Seleccione</option>
					<?php
					$sql_despacho =  datos_lista_paletizador();
					while ($datos_paletizador = $sql_despacho->fetch_object()) {
					?>
						<option value=<?= $datos_paletizador->id ?>><?= $datos_paletizador->nombres ?></option>
					<?php
					}
					?>
				</select>
			</div>
		</div>

		<div class="d-flex flex-row justify-content-center">
			<div class="p-1">Total a Viajar:
				<input type="number" style="width: 150px; height: 36px;" name="total_viajar">
			</div>
			<div class="p-1">Cajas:
				<input type="number" style="width: 195px; height: 36px;" name="cajas">
			</div>
			<div class="p-1"> Cantidad de Pallet:
				<input type="number" style="width: 200px; height: 36px;" name="cantidad_pallet">
			</div>
		</div>

		<div class="text-start  fs-5 fw-semibold mt-5">
			Observaciones:
			<textarea class="text-uppercase form-control mt-3" name="observacion_despacho" rows="3"></textarea>
		</div>
	</div>
<?php
}
?>