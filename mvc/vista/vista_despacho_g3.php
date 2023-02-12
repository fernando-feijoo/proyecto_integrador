<div class="row mx-auto">
	<h2>Despacho</h2>
	<div class="d-flex flex-row justify-content-center">

			<div class="form-check form-check-inline fw-bold ">
			Filtro:
			</div>
			<!-- Opciones de seleccion de radio button -->
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions_g3" id="inlineRadio1" value="1">
				<label class="form-check-label" for="inlineRadio1">1</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions_g3" id="inlineRadio2" value="2">
				<label class="form-check-label" for="inlineRadio2">2</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions_g3" id="inlineRadio3" value="Ninguno">
				<label class="form-check-label" for="inlineRadio3">Ninguno</label>
			</div>
			<!-- /Opciones de seleccion de radio button -->
			
			<div class="form-check form-check-inline fw-bold ">
			Termografo:
			</div>
			<!-- Opciones de seleccion de radio button -->
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions_dg3" id="inlineRadio1" value="P19">
				<label class="form-check-label" for="inlineRadio1">P19</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions_dg3" id="inlineRadio2" value="P18">
				<label class="form-check-label" for="inlineRadio2">P18</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions_dg3" id="inlineRadio3" value="Ninguno">
				<label class="form-check-label" for="inlineRadio3">Ninguno</label>
			</div>
			<!-- /Opciones de seleccion de radio button -->

		<div class="p-1">Termografo#:
			<input type="TEXT" style="width: 257px; height: 36px;" name="TERMOGRAFO#" id="TERMOGRAFO#1">
		</div>
	</div>

	<div class="d-flex flex-row justify-content-center line-height:0; ">
		<div class="p-1">Sello Adhesivo:
			<input type="TEXT" style="width: 405px; height: 36px;" name="sello_adhesivo" id="sello_adhesivo1">
		</div>
		<div class="p-1"> Sello Verificador:
			<input type="TEXT" style="width: 200px; height: 36px;;" name="sello_vericador" id="sello_vericador1">
		</div>
	</div>

	<div class="d-flex flex-row justify-content-center line-height:0;">
		<div class="p-1"> Sello Exportador Candado:
			<input type="TEXT" style="width: 270px; height: 36px;" name="sello_expotador_candado" id="sello_expotador_candado1">
		</div>
		<div class="p-1"> Fecha y Hora Salida:
			<input type="datetime-local" style="height: 36px;" name="fecha_hora_salida">
		</div>
	</div>

	<div class="d-flex flex-row justify-content-center line-height:0; ">
		<div class="p-1"> Sello Exportador cable:
			<input type="TEXT" style="width: 250px; height: 36px;" name="sello_cable" id="sello_cable1">
		</div>
		<div class="p-1"> Compañia Transportista:
			<input type="TEXT" style="width: 250px; height: 36px;" name="trasnportista" id="transportista1">
		</div>
	</div>

	<div class="d-flex flex-row justify-content-center  line-height:0;">
		<div class="p-1"> Sello Nave:
			<input type="TEXT" style="width: 245px; height: 36px;" name="sello_nave" id="sello_nave1">
		</div>
		<div class="p-1"> Vapor:
			<input type="TEXT" style="width: 195px; height: 36px;" name="vapor" id="vapor1">
		</div>
		<div class="p-1"> Destino:
			<input type="TEXT" style="width: 195px; height: 36px;" name="Destino" id="Destino1">
		</div>
	</div>

	<div class="d-flex flex-row justify-content-center  line-height:0; ">
		<div class="p-1"> Nombre de Paletizadores:
			<select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="paletzador" id="paletizador1">
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
			<select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="paletzador" id="paletizador1">
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
			<select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="paletzador" id="paletizador1">
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
			<select type="form-select" aria-label="Disabled select example" style="width: 160px; height: 36px;" name="paletzador" id="paletizador1">
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

	<div class="d-flex flex-row justify-content-center  line-height:0;">
		<div class="p-1">Total a Viajar:
			<input type="TEXT" style="width: 150px; height: 36px;" name="viajar" id="viajar1">
		</div>
		<div class="p-2">Cajas:
			<input type="TEXT" style="width: 195px; height: 36px;" name="cajas" id="cajas1">
		</div>
		<div class="p-1"> Cantidad de Pallet:
			<input type="TEXT" style="width: 200px; height: 36px;" name="cantidad_cajas" id="pallet1">
		</div>
	</div>

	<div class="text-start  fs-5 fw-semibold" style="margin-top: 20px;">
		Observaciones:
		<textarea class="form-control" id="observacion_higiene" rows="3"></textarea>
	</div>
</div>
<input type="hidden" name="btn-guardar-inspeccion" id="btn-guardar-value1" value="guardado">
<button id="boton-guardar-inspeccion" class="btn btn-outline-primary" type="submit" name="btn-guardar-inspeccion" value="guardado">Guardar</button>
<input type="hidden" name="btn-actualizar-inspeccion" id="btn-actualizar-value" value="actualizado">
<button id="boton-actualizar-inspeccion" class="btn btn-outline-info" type="submit" name="btn-actualizar-inspeccion" value="actualizado">Actualizar</button>