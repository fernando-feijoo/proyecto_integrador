<?php
include_once "./../../layout/header.php";
include_once "./Grupo 3/menu_gestion_datos.php";
?>
<div id="contenedor-escritorio-contenido" class="container-fluid col text-center pe-2 ps-0">
	<!-- Contenedor de escritorio *interno -->
	<section>
		<div id="escritorio-contenido" class="container-fluid mt-1 mb-1 rounded-4">
			<div class="row">
				<!-- Titulo o encabezado del escritorio -->
				<div class="col-1 d-flex align-items-end mb-1">
					<a id="ico-home" href="./dashboard.php"><img src="./../../img/home_32x32-escritorio.png" alt="icono-home" /></a>
				</div>
				<div class="col-10 me-3 ms-3 mt-4">
					<div id="titulo-escritorio">
						REGISTRO DE VEHICULOS
					</div>
				</div>
				<!-- /Titulo o encabezado del escritorio -->
			</div>
			<div id="caja-separacion-escritorio" class="mx-auto"></div>

			<!-- // HICE LA CONEXION EN EL MENU DE ADMINISTRACION -->
			<?php
			include("./../controlador/Grupo 3/registro_admin_reg_vehi.php");
			include("./../modelo/Grupo 3/modelo_listado_reg_vehi.php");

			if (!empty($_GET["id_listado"])) {
				$_SESSION["id_listado"] = $_GET["id_listado"];
				unset($_SESSION["id_max"]);
			} else if (!empty($_GET["id_max"])) {
				$_SESSION["id_max"] = $_GET["id_max"];
				unset($_SESSION["id_listado"]);
			}

			if (!empty($_GET["id_eliminar_vehi"])) {
				eliminado_reg_vehi();
			}

			?>
			<!-- Barra de ingreso de datos y actualizacion -->
			<div class="d-flex justify-content-center flex-row">
				<?php
				$id = id_max_vehi();
				$dato_id = $id->fetch_object();
				?>
				<form action="?id_max=<?= ($dato_id->id_max) + 1 ?>" method="post">
					<div class="input-group mt-5" style="width: 750px;">
						<?php
						if (!empty($_GET["id_listado"])) {
							$sql = cargar_dato_actualizar_vehi();
							$dato_actualizar = $sql->fetch_object();
						?>
							<input name="nombre_chasis" type="text" class="text-uppercase form-control" placeholder="CHASIS" value="<?= $dato_actualizar->chasis ?>" style="width: 190px;">
							<input name="nombre_placa" type="text" class="text-uppercase form-control" placeholder="PLACA" value="<?= $dato_actualizar->placa ?>">
							<input name="nombre_marca" type="text" class="text-uppercase form-control" placeholder="MARCA" value="<?= $dato_actualizar->marca ?>">
						<?php
						} else {
						?>
							<input name="nombre_chasis" type="text" class="text-uppercase form-control" placeholder="CHASIS" value="" style="width: 190px;">
							<input name="nombre_placa" type="text" class="text-uppercase form-control" placeholder="PLACA" value="">
							<input name="nombre_marca" type="text" class="text-uppercase form-control" placeholder="MARCA" value="">
						<?php
						}
						?>

						<?php
						if (empty($_GET["id_listado"])) {
						?>
							<input type="hidden" name="btn-guardar-vehiculo" id="btn-guardar-value" value="guardado">
							<button id="btn-guardar-general-cont" class="btn btn-outline-primary" type="submit" name="btn-guardar-vehiculo" value="guardar">Guardar</button>
						<?php
						} else {
						?>
							<input type="hidden" name="btn-actualizar-vehiculo" id="btn-actualizar-value" value="actualizado">
							<button id="btn-actualizar-general-cont" class="btn btn-outline-info" type="submit" name="btn-actualizar-vehiculo" value="actualizar">Actualizar</button>
						<?php
						}
						?>
					</div>
				</form>
			</div>
			<!-- /Barra de ingreso de datos y actualizacion -->

			<table class="table table-striped table-hover table-sm table-bordered border-dark align-middle mt-5 mx-auto" style="width: 800px;">
				<thead class="bg-primary bg-gradient bg-opacity-75">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">CHASIS</th>
						<th scope="col">PLACA</th>
						<th scope="col">MARCA</th>
						<th scope="col" style="width: 160px;"></th>
					</tr>
				</thead>
				<tbody class="table-group-divider">
					<?php
					$sql = $sql_lista_vehi;
					$id_ = 1;
					while ($datos = $sql->fetch_object()) {
					?>
						<tr>
							<td><?= $id_++ ?></td>
							<td><?= $datos->chasis ?></td>
							<td><?= $datos->placa ?></td>
							<td><?= $datos->marca ?></td>
							<td>
								<a id="boton-editar-garita" href="./vista_admin_reg_vehi_g3.php?id_listado=<?= $datos->id ?>" class="btn btn-small btn-warning" style="width: 70px;"><i class="fa-regular fa-pen-to-square"></i></a>
								<a id="boton-eliminar-garita" class="btn btn-small btn-danger" href="./vista_admin_reg_vehi_g3.php?id_eliminar_vehi=<?= $datos->id ?>" style="width: 70px;"><i class="fa-regular fa-trash-can"></i></a>
							</td>
						</tr>
					<?php }
					?>

				</tbody>
			</table>

			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center">
					<?php if ($pagina != 1) { ?>
						<li class="page-item">
							<a class="page-link" href="?pagina=<?= $pagina - 1 ?>">Previous</a>
						</li>
					<?php } ?>
					<?php for ($i = 1; $i <= $num_pags; $i++) { ?>
						<li class="page-item <?= $i == $pagina ? 'active' : '' ?>">
							<a class="page-link" href="?pagina=<?= $i ?>"><?= $i ?></a>
						</li>
					<?php } ?>
					<?php if ($pagina != $num_pags) { ?>
						<li class="page-item">
							<a class="page-link" href="?pagina=<?= $pagina + 1 ?>">Next</a>
						</li>
					<?php } ?>
				</ul>
			</nav>

		</div>
	</section>
</div>
<?php
include_once "./../../layout/footer.php";
?>