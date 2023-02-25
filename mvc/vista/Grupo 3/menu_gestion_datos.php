<div id="contenedor-menu-navegacion" class="col-5 col-sm-4 col-md-3 col-lg-3 col-xl-3 text-center">
	<section>
		<div id="menu-navegacion" class="container-fluid mt-1 mb-1 rounded-4 text-center">
			<div class="row mx-auto">
				<div class="col">
					<!-- Seccion de hora y fecha menu lateral -->

					<div id="contenedor-img" class="row pt-5 mx-auto top-menu">
						<div class="col text-end">
							<img id="img-section" src="../../img/clock_32px-dashboard.png" alt="icono-reloj" />
						</div>
						<div class="col-8 col-sm-7 text-start">
							<div id="clock"></div>
						</div>
					</div>

					<div id="contenedor-img" class="row pt-3 mx-auto pb-4">
						<div id="img-section" class="col text-end">
							<img id="img-section" src="../../img/calendar_32px-dashboard.png" alt="icono-calendario" />
						</div>
						<div class="col-8 col-sm-7 text-start">
							<div id="date"></div>
						</div>
					</div>

					<div id="caja-separacion"></div>
					<!-- /Seccion de hora y fecha menu lateral -->

					<?php
					include_once("./../modelo/conexion_bd.php");
					include("./../modelo/Grupo 3/modelo_admin_reg_cajas.php");
					?>

					<!-- Seccion de tercer menu de Acopio y sub menus ADMIN -->
					<div class="row pt-5">
						<div class="col-1 text-end">
							<img id="img-submenu" src="../../img/configuration_32x32px.png" alt="icono-admin" />
						</div>
						<div id="titulo-menu" class="col text-start ms-2">
							Administrar
						</div>
					</div>
					<hr style="width: 80%; margin-top: 0.5rem;" />

					<section>
						<div class="row pt-3">
							<div class="col-xs-12 col-md-10 offset-md-2 text-start">
								<div id="botones-menu">
									<?php
									$id = id_max();
									$dato_id = $id->fetch_object();
									?>
									<a class="opcion-menu" href="./vista_admin_reg_cajas_g3.php?id_max=<?= ($dato_id->id_max) + 1 ?>" name="opcion-reporte">Registro de Cajas</a>
								</div>
							</div>
						</div>
					</section>

					<section>
						<div class="row pt-3">
							<div class="col-xs-12 col-md-10 offset-md-2 text-start">
								<div id="botones-menu">
									<a class="opcion-menu" href="./vista_admin_reg_vehi_g3.php" name="opcion-reporte">Registro de Vehiculos</a>
								</div>
							</div>
						</div>
					</section>

					<section>
						<div class="row pt-3">
							<div class="col-xs-12 col-md-10 offset-md-2 text-start">
								<div id="botones-menu">
									<a class="opcion-menu" href="./vista_admin_reg_chof_g3.php" name="opcion-reporte">Registro de Choferes</a>
								</div>
							</div>
						</div>
					</section>
					<!-- /Seccion de tercer menu de Acopio y sub menus ADMIN -->

				</div>
			</div>
		</div>
	</section>
</div>