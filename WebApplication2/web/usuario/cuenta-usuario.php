<?php
	$pageTitle = 'Cuenta de Usuario';
	include ('header.php');
?>

	<section class="cntTituloPagina">
		<div class="td_container">
			<div class="col-md-6">
				<h2>Cuenta de Usuario</h2>
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
			<div class="col-md-9 form_sitio">
				<form>
				  <h2>Identificación de Usuario</h2>
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label for="tipo_identi">Tipo de Idetificación <span class="text-danger">*</span></label>
				  			<select class="form-control" name="" id="tipo_identi" disabled>
				  				<option value="">Cedula de Ciudadania</option>
				  			</select>
				  		</div>
				  		<div class="col-md-6">
				  			<label for="numero_identi">Número de Idetificación <span class="text-danger">*</span></label>
				  			<input class="form-control" type="text" id="numero_identi" placeholder="1033755408" disabled>
				  		</div>
				  	</div>
				  </div>
				  <hr>
				  <h2>Modificar Contraseña</h2>
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label for="pss_actual">Contraseña Actual <span class="text-danger">*</span></label>
				  			<input class="form-control" type="password" id="pss_actual">
				  		</div>
				  	</div>
				  </div>
				  <div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="pss_nueva1">Nueva Contraseña <span class="text-danger">*</span></label>
								<input class="form-control" type="password" id="pss_nueva1">
							</div>
							<div class="col-md-6">
								<label for="pss_nueva2">Repita la Contraseña <span class="text-danger">*</span></label>
								<input class="form-control" type="password" id="pss_nueva2">
							</div>
						</div>
				  </div>
				  <div class="text-center">
				  	<a href="#" class="btn btn-td btn-square">Guardas Cambios</a>
				  </div>
				</form>
				
			</div>
		</div>
	</div>

<?php
	include ('footer.php');
?>