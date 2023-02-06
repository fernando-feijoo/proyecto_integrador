<?php
include_once('./../../layout/header.php');
include_once('./Grupo 3/menu.php');
?>
<div id="contenedor-escritorio-contenido" class="container-fluid col text-center pe-2 ps-0">
	<!-- Contenedor de escritorio *interno -->
	<div id="escritorio-contenido" class="container-fluid mt-1 mb-1 rounded-4">
		<div class="row">
			<!-- Titulo o encabezado del escritorio -->
			<div class="col-1 d-flex align-items-end mb-1">
				<a id="ico-home" href="./dashboard.php"><img src="./../../img/home_32x32-escritorio.png" alt="icono-home" /></a>
			</div>
			<div class="col-10 me-3 ms-3 mt-4">
				<div id="titulo-escritorio">
					CONTENEDORES DISPONIBLES<br>
					PARA INSPECCIONAR
				</div>
			</div>
			<!-- /Titulo o encabezado del escritorio -->
		</div>
		<div id="caja-separacion-escritorio" class="mx-auto"></div>

		<table class="table table-striped table-hover table-sm table-bordered border-dark align-middle mt-5 mx-auto" style="width: 900px !important;">
			<thead class="bg-primary bg-gradient bg-opacity-75">
				<tr>
					<th scope="col">CONTENEDOR</th>
					<th scope="col">HORA DE LLEGADA</th>
					<th scope="col">SEMANA</th>
					<th scope="col">NOMBRE ACOPIO</th>
					<th scope="col">TIPO DE CAJA</th>
					<th scope="col" style="width: 160px;"></th>
				</tr>
			</thead>
			<tbody class="table-group-divider">
				<?php
				include_once('./../modelo/Grupo 3/modelo_contenedores_disponibles.php');
				$sql = consultaContenedores();
				while ($datos = $sql->fetch_object()) {
				?>
					<tr>
						<td><?= $datos->contenedor ?></td>
						<td><?= $datos->hora_llegada ?></td>
						<td><?= $datos->semana ?></td>
						<td><?= $datos->nombre_acopio ?></td>
						<td><?= $datos->tipo_de_caja ?></td>
						<td>
							<a id="boton-registrar-contenedor" href="./vista_listado_registro_g3.php?id_regis=<?= $datos->id ?>&&numCont=<?= $datos->num_contenedor ?>" class="btn btn-small btn-outline-success" style="width: 70px;"><i class="fa-solid fa-file-pen"></i></a>
						</td>
					</tr>
				<?php }
				?>
			</tbody>
		</table>

	</div>
</div>
<?php
include_once('./../../layout/footer.php')
?>