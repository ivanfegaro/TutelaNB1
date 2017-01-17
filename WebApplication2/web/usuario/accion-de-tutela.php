<?php
	$pageTitle = 'Acción de Tutela';
	include ('header.php');
?>

	<section class="cntTituloPagina">
		<div class="td_container">
			<div class="col-md-6">
				<h2>Mi Tutela - Radicado 0001</h2>
			</div>
			<div class="col-md-6 text-right">
				<ul class="breadcrumbs">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Cuenta de Usuario</a></li>
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
			
			<div class="col-md-9">
				<div class="contendedor_tutela">
					<div class="cabecera_tutela">
						<div class="col-md-6">
							sadasd
						</div>
						<div class="col-md-6">
							
						</div>
					</div>
					
					<div class="cuerpo_accionTutela col-md-12 ">
					    
					    <!--[[INICIO]]--PESTAÑAS-TUTELA-->
					    <ul class="nav nav-pills nav-justified nav_tutela" role="tablist">
							<li role="presentation" class="active"><a href="#resumen_tu" aria-controls="resumen_tu" role="tab" data-toggle="tab">Resumen y Estado</a></li>
							<li role="presentation"><a href="#pruebas_tu" aria-controls="pruebas_tu" role="tab" data-toggle="tab">Pruebas y Recursos</a></li>
							<li role="presentation"><a href="#correcciones_tu" aria-controls="correcciones_tu" role="tab" data-toggle="tab">Correcciones</a></li>
							<li role="presentation"><a href="#medidas_tu" aria-controls="medidas_tu" role="tab" data-toggle="tab">Medidas Cautelares</a></li>
							<li role="presentation"><a href="#fallo_tu" aria-controls="fallo_tu" role="tab" data-toggle="tab">Fallo</a></li>
					    </ul>
					    <!--[[FIN]]--PESTAÑAS-TUTELA-->
					    
					    <!--[[INICIO]]--CONTENIDO-PESTAÑAS-TUTELA-->
					   	<div class="tab-content cntTab_tutela">
					   		<!--[[INICIO]]-PESTAÑA-1-TUTELA-->
							<div role="tabpanel" class="tab-pane active" id="resumen_tu">
								<h4>Estado</h4>
								<p>La Acción de tutela se encuentra en el paso # 4. Medidas Cautelares</p>
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
								<hr>
								<div class="row">
									<div class="col-md-6">
										<h5>Pruebas</h5>
										<ul class="list-group">
										  <li class="list-group-item">
											<span class="badge">14</span>
											Pruebas Accionado
										  </li>
										  <li class="list-group-item">
											<span class="badge">5</span>
											Pruebas Accionante
										  </li>
										</ul>
										<hr>
										<h5>Recursos</h5>
										<ul class="list-group">
										  <li class="list-group-item">
											<span class="badge">2</span>
											Informes
										  </li>
										  <li class="list-group-item">
											<span class="badge">1</span>
											Información Adicional
										  </li>
										</ul>
									</div>
									<div class="col-md-6">
										<h5>Preguntas</h5>
										
										
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-td btn-square" data-toggle="modal" data-target="#modalPregunta">
										  <i class="fa fa-plus"></i> Nueva Pregunta
										</button>

										<!-- Modal -->
										<div class="modal fade" id="modalPregunta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">Nueva Pregunta</h4>
											  </div>
											  <div class="modal-body">
												...
											  </div>
											  <div class="modal-footer">
												<button type="button" class="btn btn-default btn-square" data-dismiss="modal">Cancelar</button>
												<button type="button" class="btn btn-td btn-square">Guardar Cambios</button>
											  </div>
											</div>
										  </div>
										</div>
									</div>
								</div>
							</div>
							<!--[[FIN]]-PESTAÑA-1-TUTELA-->
							
							<!--[[INICIO]]-PESTAÑA-2-TUTELA-->
							<div role="tabpanel" class="tab-pane form_sitio" id="pruebas_tu">
								<div class="row">
									<div class="col-md-5">
										<select name="" id="" class="form-control">
											<option value="" selected="selected">Adjuntos</option>
											<option value="" >Solicitados</option>
										</select>
									</div>
								</div>
							</div>
							<!--[[FIN]]-PESTAÑA-2-TUTELA-->
							
							<div role="tabpanel" class="tab-pane" id="correcciones_tu">
								<div class="alert alert-info square" role="alert">No se han solicitado correcciones...</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="medidas_tu">
								<div class="alert alert-info square" role="alert">No se han dictado medidas cautelares...</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="fallo_tu">
								<div class="alert alert-info square" role="alert">No se ha dictado el fallo para esta tutela...</div>
							</div>
					  	</div>
						<!--[[INICIO]]--CONTENIDO-PESTAÑAS-TUTELA-->
						
					</div>
				</div>
			</div>
			
		</div>
	</div>

<?php
	include ('footer.php');
?>