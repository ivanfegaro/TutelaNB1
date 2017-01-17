<?php
	$pageTitle = 'Interponer Tutela';
	include ('header.php');
?>

	<section class="cntTituloPagina">
		<div class="td_container">
			<div class="col-md-6">
				<h2>Interponer Tutela</h2>
			</div>
			<div class="col-md-6 text-right">
				<ul class="breadcrumbs">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Interponer Tutela</a></li>
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
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
					<div class="panel-heading panel_activo" role="tab" id="headingOne">
						<h4 class="panel-title">
						  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#paso1_interponer" aria-expanded="true" aria-controls="paso1_interponer">
						  	1. Información del Demandante 
							</a>
						</h4>
					</div>
					<div id="paso1_interponer" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					  <div class="panel-body">
						<form>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="ti">Tipo de Identificación <span class="text-danger">*</span></label>
									<select name="" id="ti" class="form-control" >
										<option value="">[Seleccione...]</option>
										<option value="">Cedula de Ciudadania</option>
										<option value="">Cedula de Extranjeria</option>
										<option value="">NIT</option>
									</select>
								</div>
								<div class="col-md-6">
									<label for="ni">Número de Identificación <span class="text-danger">*</span></label>
									<input class="form-control" id="ni">
								</div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="pn">Primer Nombre <span class="text-danger">*</span></label>
									<input class="form-control" id="pn">
								</div>
								<div class="col-md-6">
									<label for="sn">Segundo Nombre</label>
									<input class="form-control" id="sn">
								</div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="pa">Primer Apellido <span class="text-danger">*</span></label>
									<input class="form-control" id="pa">
								</div>
								<div class="col-md-6">
									<label for="sa">Segundo Apellido <span class="text-danger">*</span></label>
									<input class="form-control" id="sa" >
								</div>
							</div>
						  </div>
						  <div class="form-group">
							<label for="apoderado">Apoderado <span class="text-danger">*</span></label>
							<div >
								<input id="ck_apoderado_op1" type="radio" name="ck_apoderado" value="1"><label for="ck_apoderado_op1"><span></span>Si</label>
								<input id="ck_apoderado_op2" type="radio" name="ck_apoderado" value="2"><label for="ck_apoderado_op2"><span></span>No</label>
							</div>
						  </div>
						  <div class="text-center">
							<a class="btn btn-td btn-square" role="button" data-toggle="collapse" data-parent="#accordion" href="#paso2_interponer" aria-expanded="true" aria-controls="paso2_interponer">Continuar</a>
						  </div>
						</form>
					  </div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
					  <h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#paso2_interponer" aria-expanded="true" aria-controls="paso2_interponer">
						  2. Domicilio y Contacto del Demandante
					  	</a>
					  </h4>
					</div>
					<div id="paso2_interponer" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					  <div class="panel-body">
						<form>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="dir_acccionante">Dirección de Domicilio <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="dir_acccionante">
								</div>
								<div class="col-md-6">
									<label for="barrio_accionante">Barrio <span class="text-danger">*</span></label>
									<input class="form-control" id="barrio_accionante">
								</div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="depto_accionante">Departamento <span class="text-danger">*</span></label>
									<select class="form-control" id="depto_accionante">
										<option value="">[Seleccione...]</option>
									</select>
								</div>
								<div class="col-md-6">
									<label for="ciudad_accionante">Ciudad / Municipio</label>
									<select class="form-control" id="ciudad_accionante">
										<option value="">[Seleccione...]</option>
									</select>

								</div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="movil_accionante">Teléfono Celular <span class="text-danger">*</span></label>
									<input class="form-control" id="movil_accionante">
								</div>
								<div class="col-md-6">
									<label for="fijo_accionante">Teléfono Fijo </label>
									<input class="form-control" id="fijo_accionante" >
								</div>
							</div>
						  </div>
						  <div class="text-center">
							<a class="btn btn-td-gray btn-square" role="button" data-toggle="collapse" data-parent="#accordion" href="#paso1_interponer" aria-expanded="true" aria-controls="paso1_interponer">Volver</a>
							<a class="btn btn-td btn-square" role="button" data-toggle="collapse" data-parent="#accordion" href="#paso3_interponer" aria-expanded="true" aria-controls="paso3_interponer">Continuar</a>
						  </div>
						</form>

					  </div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
					  <h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#paso3_interponer" aria-expanded="true" aria-controls="paso3_interponer">
						  3. Información del Demandado
					  	</a>
					  </h4>
					</div>
					<div id="paso3_interponer" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					  <div class="panel-body">
						<form>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="t_accionado">Tipo de Accionado <span class="text-danger">*</span></label>
									<select name="" id="t_accionado" class="form-control">
										<option value="">[Seleccione...]</option>
										<option value="">Persona Natural</option>
										<option value="">Persona Juridica</option>
										<option value="">Autoridad Pública</option>
									</select>
								</div>
								<div class="col-md-6">
									<label for="ni_accionado">Número de Identificación <span class="text-danger">*</span></label>
									<input class="form-control" id="ni_accionado">
								</div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="pn_accionado">Primer Nombre <span class="text-danger">*</span></label>
									<input class="form-control" id="pn_accionado">
								</div>
								<div class="col-md-6">
									<label for="sn_accionado">Segundo Nombre</label>
									<input class="form-control" id="sn_accionado">
								</div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="pa_accionado">Primer Apellido <span class="text-danger">*</span></label>
									<input class="form-control" id="pa_accionado">
								</div>
								<div class="col-md-6">
									<label for="sa_accionado">Segundo Apellido <span class="text-danger">*</span></label>
									<input class="form-control" id="sa_accionado" >
								</div>
							</div>
						  </div>
						  
						  <div class="form-group row">
						  	<div class="col-md-6">
								<label for="ter_vinculados">Terceros Vinculados</label>
								<select id="ter_vinculados" class="form-control selectpicker" multiple data-done-button="true" data-live-search="true">
									<option>Ministerio de Salud</option>
									<option>Ministerio del Trabajo</option>
									<option>Ministerio de Educación</option>

								</select>
						  	</div>
						  </div>

						  <div class="text-center">
							<a class="btn btn-td-gray btn-square" role="button" data-toggle="collapse" data-parent="#accordion" href="#paso2_interponer" aria-expanded="true" aria-controls="paso2_interponer">Volver</a>
							<a class="btn btn-td btn-square" role="button" data-toggle="collapse" data-parent="#accordion" href="#paso4_interponer" aria-expanded="true" aria-controls="paso4_interponer">Continuar</a>
						  </div>
						</form>
					  </div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
					  <h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#paso4_interponer" aria-expanded="true" aria-controls="paso4_interponer">
					  		4. Domicilio y Contacto del Demandado 
					  	</a>
					  </h4>
					</div>
					<div id="paso4_interponer" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					  <div class="panel-body">
						<form>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="dir_acccionando">Dirección de Domicilio <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="dir_acccionando">
								</div>
								<div class="col-md-6">
									<label for="barrio_accionado">Barrio <span class="text-danger">*</span></label>
									<input class="form-control" id="barrio_accionado">
								</div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="depto_accionado">Departamento <span class="text-danger">*</span></label>
									<select class="form-control" id="depto_accionado">
										<option value="">[Seleccione...]</option>
									</select>
								</div>
								<div class="col-md-6">
									<label for="ciudad_acciondo">Ciudad / Municipio</label>
									<select class="form-control" id="ciudad_acciondo">
										<option value="">[Seleccione...]</option>
									</select>

								</div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="movil_accionado">Teléfono Celular <span class="text-danger">*</span></label>
									<input class="form-control" id="movil_accionado">
								</div>
								<div class="col-md-6">
									<label for="fijo_accionado">Teléfono Fijo </label>
									<input class="form-control" id="fijo_accionado" >
								</div>
							</div>
						  </div>
						  <div class="text-center">
							<a class="btn btn-td-gray btn-square" role="button" data-toggle="collapse" data-parent="#accordion" href="#paso3_interponer" aria-expanded="true" aria-controls="paso3_interponer">Volver</a>
							<a class="btn btn-td btn-square" role="button" data-toggle="collapse" data-parent="#accordion" href="#paso5_interponer" aria-expanded="true" aria-controls="paso5_interponer">Continuar</a>
						  </div>
						</form>
					  </div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
					  <h4 class="panel-title">
					  	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#paso5_interponer" aria-expanded="true" aria-controls="paso5_interponer">
							5. Contenido de la Acción
						</a>
					  </h4>
					</div>
					<div id="paso5_interponer" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					  <div class="panel-body">
						<form>
						  <h4>Hechos y Peticiones</h4>
						  <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="der_vulnerados">Derechos Vulnerados <span class="text-danger">*</span></label>
									<select id="der_vulnerados" class="form-control selectpicker" multiple data-done-button="true" data-live-search="true">
										<option>Derecho a la salud</option>
										<option>Derecho al trabajo</option>
										<option>Derecho a la vida</option>
										<option>Derecho a una vivienda digna</option>

									</select>
								</div>
							</div>
						  </div>
						  <div class="form-group row">
							
							<div class="col-md-6">
								<label for="desc_accion">Acción u Omisión <span class="text-danger">*</span></label>
								<textarea class="form-control" id="desc_accion" cols="30" rows="4"></textarea>
							</div>
							<div class="col-md-6">
								<label for="desc_peticion">Petición <span class="text-danger">*</span></label>
								<textarea class="form-control" id="desc_peticion" cols="30" rows="4"></textarea>
							</div>
							
						  </div>
						  <div class="form-group">
							<label for="apoderado">Medidas Cautelares <span class="text-danger">*</span></label>
							<div >
								<input id="ck_cautelares_op1" type="radio" name="ck_cautelares" value="1"><label for="ck_cautelares_op1"><span></span>Si</label>
								<input id="ck_cautelares_op2" type="radio" name="ck_cautelares" value="2"><label for="ck_cautelares_op2"><span></span>No</label>
							</div>
						  </div>
						  <div class="form-group">
							
							<label for="">Describe las medidas cautelares <span class="text-danger">*</span></label>
							<textarea class="form-control" id="desc_peticion" cols="30" rows="4">Esta opción solo se muestra cuando el usuario selecciona la opción "SI" de medidas cautelares, y en tal caso, debe ser diligenciada obligatoriamente.</textarea>
							
						  </div>
						  <hr>
						  <h4>Donde Sucedieron los hechos</h4>
						  <div class="form-group row">
						  	<div class="col-md-6">
					  			<label for="">Departamento</label>
					  			<select name="" id="" class="form-control">
						  			<option value="">[Selecciona...]</option>
						  		</select>
						  	</div>
						  	<div class="col-md-6">
					  			<label for="">Ciudad / Municipio</label>
					  			<select name="" id="" class="form-control">
						  			<option value="">[Selecciona...]</option>
						  		</select>
						  	</div>
						  </div>
						  <hr>
						  
						  
						  <div class="text-center">
							<a class="btn btn-td-gray btn-square" role="button" data-toggle="collapse" data-parent="#accordion" href="#paso4_interponer" aria-expanded="true" aria-controls="paso4_interponer">Volver</a>
							<a class="btn btn-td btn-square" role="button" data-toggle="collapse" data-parent="#accordion" href="#paso6_interponer" aria-expanded="true" aria-controls="paso6_interponer">Continuar</a>
						  </div>
						</form>
					  </div>
					</div>
				  </div>
				  
				  
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
					  <h4 class="panel-title">
					  	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#paso6_interponer" aria-expanded="true" aria-controls="paso6_interponer">
							6. Anexos y/o Pruebas
						</a>
					  </h4>
					</div>
					<div id="paso6_interponer" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					  <div class="panel-body">
						
						  
						  <div class="form-group text-right">
						  
						  	<a href="" class="btn btn-td-blue btn-square" data-toggle="modal" data-target="#modal_nuevaPrueba"><i class="fa fa-plus"></i> Añadir Prueba Anexo y/o Prueba</a>
								
							
						  </div>
						  
						  <div class="cont_item_tutela row clearfix">
							  <div class="col-md-6">
								  <div class="item_tutela">
									  <div class="header_item_tutela">
											<button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h5>Asunto de la Prueba</h5>
											<label>Jueves 15 de Diciembre del 2016</label>
									  </div>
										<p>Descripcion: Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										  <p class="tooltip_docu">
											<a href="" data-toggle="modal" data-target="#modal_pruebaAnexos">nombre_archivo.pdf
												<span class="tooltiptext_docu">
													<object data='../documentos/test-document.pdf#toolbar=0' 
															type='application/pdf' 
															width='100%' 
															height='200px'>
														<p>Este navegador no admite PDF en línea. Descarga el documento para verlo: <a href="../documentos/test-document.pdf#toolbar=0">Descargar PDF</a></p>
													</object>
												</span>
											</a>
										  </p>
								  </div>
							  </div>
							  <div class="col-md-6">
								  <div class="item_tutela">
									  <div class="header_item_tutela">
											<button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h5>Asunto de la Prueba</h5>
											<label>Jueves 15 de Diciembre del 2016</label>
									  </div>
										<p>Descripcion: Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										  <p class="tooltip_docu">
											<a href="" data-toggle="modal" data-target="#modal_pruebaAnexos">nombre_archivo.pdf
												<span class="tooltiptext_docu">
													<object data='../documentos/test-document.pdf#toolbar=0' 
															type='application/pdf' 
															width='100%' 
															height='200px'>
														<p>Este navegador no admite PDF en línea. Descarga el documento para verlo: <a href="../documentos/test-document.pdf#toolbar=0">Descargar PDF</a></p>
													</object>
												</span>
											</a>
										  </p>
								  </div>
							  </div>
						  </div>
						  <div class="cont_item_tutela row">
							  <div class="col-md-6">
								  <div class="item_tutela">
									  <div class="header_item_tutela">
											<button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h5>Asunto de la Prueba</h5>
											<label>Jueves 15 de Diciembre del 2016</label>
									  </div>
										<p>Descripcion: Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										  <p class="tooltip_docu">
											<a href="" data-toggle="modal" data-target="#modal_pruebaAnexos">nombre_archivo.pdf
												<span class="tooltiptext_docu">
													<object data='../documentos/test-document.pdf#toolbar=0' 
															type='application/pdf' 
															width='100%' 
															height='200px'>
														<p>Este navegador no admite PDF en línea. Descarga el documento para verlo: <a href="../documentos/test-document.pdf#toolbar=0">Descargar PDF</a></p>
													</object>
												</span>
											</a>
										  </p>
								  </div>
							  </div>
							  <div class="col-md-6">
								  <div class="item_tutela">
									  <div class="header_item_tutela">
											<button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h5>Asunto de la Prueba</h5>
											<label>Jueves 15 de Diciembre del 2016</label>
									  </div>
										<p>Descripcion: Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										  <p class="tooltip_docu">
											<a href="" data-toggle="modal" data-target="#modal_pruebaAnexos">nombre_archivo.pdf
												<span class="tooltiptext_docu">
													<object data='../documentos/test-document.pdf#toolbar=0' 
															type='application/pdf' 
															width='100%' 
															height='200px'>
														<p>Este navegador no admite PDF en línea. Descarga el documento para verlo: <a href="../documentos/test-document.pdf#toolbar=0">Descargar PDF</a></p>
													</object>
												</span>
											</a>
										  </p>
								  </div>
							  </div>
						  </div>
						  <div class="text-center">
							<a class="btn btn-td-gray btn-square" role="button" data-toggle="collapse" data-parent="#accordion" href="#paso5_interponer" aria-expanded="true" aria-controls="paso5_interponer">Volver</a>
							<a class="btn btn-td btn-square" role="button" href="preview-tutela.php" >Continuar</a>
						  </div>
						
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!--[[INICIO]]--MODAL-NUEVA-PRUEBA-->
	<div class="modal fade" id="modal_nuevaPrueba" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog  modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Nuevo Anexo y/o Prueba</h4>
		  </div>
		  <div class="modal-body">

			<form action="">
				<div class="form-group">
					<label for="">Asunto <span class="text-danger">*</span></label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Descripción</label>
					<textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="desc_peticion">Anexo y/o Prueba <span class="text-danger">*</span></label>
					<div>
					<input type="file" name="file" id="file" class="inputfile inputfile-2" />
					<label for="file"><i class="fa fa-upload"></i> Seleccionar Archivo...</label>
					</div>
					* Adjunta documentos (.pdf) e imagenes (.jpg, .png)
				</div>
			</form>

		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-td-gray btn-square" data-dismiss="modal">Cancelar</button>
			<button type="button" class="btn btn-td btn-square">Guardar</button>
		  </div>
		</div>
	  </div>
	</div>
	<!--[[FIN]]--MODAL-NUEVA-PRUEBA-->
	
	<!--[[INICIO]]--MODAL-DOCUMENTOS-PRUEBA-ANEXOS-->
	<div class="modal fade" id="modal_pruebaAnexos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">ASUNTO DE LA PRUEBA Y/O ANEXO</h4>
		  </div>
		  <div class="modal-body">
			<object data='../documentos/test-document.pdf#toolbar=0' 
					type='application/pdf' 
					width='100%' 
					height='500px'>
				<p>Este navegador no admite PDF en línea. Descarga el documento para verlo: <a href="../documentos/test-document.pdf#toolbar=0">Descargar PDF</a></p>
			</object>
		  </div>
		  
		</div>
	  </div>
	</div>
	<!--[[FIN]]--MODAL-DOCUMENTOS-PRUEBA-ANEXOS-->

	

<?php
	include ('footer.php');
?>