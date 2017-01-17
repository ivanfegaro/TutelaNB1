<?php
	$pageTitle = 'Mis Tutelas';
	include ('header.php');
?>

	<section class="cntTituloPagina">
		<div class="td_container">
			<div class="col-md-6">
				<h2>Mis Tutelas</h2>
			</div>
			<div class="col-md-6 text-right">
				<ul class="breadcrumbs">
					<li><a href="mis-tutelas.php">Inicio</a></li>
					<li><a href="#">Mis Tutelas</a></li>
				</ul>
			</div>
		</div>
	</section>
	
	<div class="contenedor_principal">
		<div class="td_container">
			<div class="col-md-3">
				<!--[[INICIO]]MENU-VERTICAL-->
				<?php
					include ('menu-v.php');
				?>
				<!--[[FIN]]MENU-VERTICAL-->
				
			</div>
			
			<div class="col-md-9 form_sitio">
				<div class="contendedor_tutela">
					<div class="cabecera_tutela">
						<div class="row">
							<div class="form-group col-md-6">
								<div class="col-md-6 col-sm-6">
									<select name="" id="" class="form-control">
										<option value="">[Derecho Vulnerado...]</option>
									</select>
								</div>
								<div class="col-md-6 col-sm-6">
									<input type="date" placeholder="Fecha de Radicado" class="form-control">
								</div>
							</div>
							<div class="form-group col-md-4 col-md-offset-2">
								<div class="input-group">
								  <input type="text" class="form-control" placeholder="Buscar por...">
								  <span class="input-group-btn">
									<button class="btn btn-td btn-square" type="button">Buscar</button>
								  </span>
								</div>
							</div>
						</div>
					</div>
					
					<div class="cuerpo_accionTutela col-md-12">
						
						<div class="panel panel-default">
						  <div class="panel-body cnt_miTutela">
							<div class="row">
								<div class="col-md-9">
									<h3>Mi Tutela - Radicado 0001</h3>
									<h5>Derecho vulnerado: Derecho al Trabajo - Estado: Activo</h5>
									<p>Fecha de Solicitud: Martes, 06 Dic 2016</p>
									<p>
										Accionante: Pepito Perez Castro <br>
										Accionado: Luis Alejandro Duarte Gonzales
									</p>
								</div>
								<div class="col-md-3 text-right" >
									<div style="padding:40px 0;">
									<a href="accion-de-tutela.php" class="btn btn-td btn-square btn-responsive" >Ver Detalles</a>
									</div>
								</div>
							</div>
							<div class="row ">
					  			<div class="col-md-12">
									<p> Estado: 4. Medida Cautelares</p>
									<div class="cnt_estadoTutela">
										<div class="gra_estadoTutela">
											<div class="estadoTutela estadoT_1 est_act"></div>
											<div class="estadoTutela estadoT_2 est_act"></div>
											<div class="estadoTutela estadoT_3 est_act"></div>
											<div class="estadoTutela estadoT_4 est_act"></div>
											<div class="estadoTutela estadoT_5"></div>
											<div class="estadoTutela estadoT_6"></div>
										</div>
										<div class="cntPaso_estadoTutela">
											<div class="paso_estadoTutela ">1</div>
											<div class="paso_estadoTutela ">2</div>
											<div class="paso_estadoTutela ">3</div>
											<div class="paso_estadoTutela ">4</div>
											<div class="paso_estadoTutela ">5</div>
											<div class="paso_estadoTutela ">6</div>
										</div>
									</div>
						  		</div>
						  	</div>
						  </div>
						</div>
						
						<div class="panel panel-default">
						  <div class="panel-body cnt_miTutela">
							<div class="row">
								<div class="col-md-9">
									<h3>Mi Tutela - Radicado 0002</h3>
									<h5>Derecho vulnerado: Derecho a la Salud - Estado: Activo</h5>
									<p>Fecha de Solicitud: Lunes, 03 Oct 2016</p>
									<p>
										Accionante: Pepito Perez Castro <br>
										Accionado: Salud Total EPS
									</p>
								</div>
								<div class="col-md-3 text-right" >
									<div style="padding:40px 0;">
									<a href="accion-de-tutela.php" class="btn btn-td btn-square btn-responsive" >Ver Detalles</a>
									</div>
								</div>
							</div>
							<div class="row ">
					  			<div class="col-md-12">
									<p>Estado: 5. Pruebas y Recursos</p>
									<div class="cnt_estadoTutela">
										<div class="gra_estadoTutela">
											<div class="estadoTutela estadoT_1 est_act"></div>
											<div class="estadoTutela estadoT_2 est_act"></div>
											<div class="estadoTutela estadoT_3 est_act"></div>
											<div class="estadoTutela estadoT_4 est_act"></div>
											<div class="estadoTutela estadoT_5 est_act"></div>
											<div class="estadoTutela estadoT_6"></div>
										</div>
										<div class="cntPaso_estadoTutela">
											<div class="paso_estadoTutela ">1</div>
											<div class="paso_estadoTutela ">2</div>
											<div class="paso_estadoTutela ">3</div>
											<div class="paso_estadoTutela ">4</div>
											<div class="paso_estadoTutela ">5</div>
											<div class="paso_estadoTutela ">6</div>
										</div>
									</div>
						  		</div>
						  	</div>
						  </div>
						</div>
						
					</div>
					
					
				</div>
			</div>
			
		</div>
	</div>

<?php
	include ('footer.php');
?>