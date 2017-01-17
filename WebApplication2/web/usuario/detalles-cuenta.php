<?php
	$pageTitle = 'Detalles de la cuenta';
	include ('header.php');
?>

	<section class="cntTituloPagina">
		<div class="td_container">
			<div class="col-md-6">
				<h2>Detalles de la Cuenta</h2>
			</div>
			<div class="col-md-6 text-right">
				<ul class="breadcrumbs">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Detalles de la Cuenta</a></li>
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
				  <h2>Correo Electrónico</h2>
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label for="">Correo Electrónico Actual <span class="text-danger">*</span></label>
				  			<input class="form-control" type="text" value="juanito.perez@correo.com" disabled>
				  		</div>
				  	</div>
				  </div>
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label for="">Nuevo Correo Electrónico <span class="text-danger">*</span></label>
				  			<input class="form-control" type="text" >
				  		</div>
				  		<div class="col-md-6">
				  			<label for="">Repita el Correo Electrónico <span class="text-danger">*</span></label>
				  			<input class="form-control" type="text">
				  		</div>
				  	</div>
				  </div>
				  <hr>
				  <h2>Nombres y Apellidos</h2>
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label for="">Primer Nombre <span class="text-danger">*</span></label>
				  			<input class="form-control" type="text" value="Pepito">
				  		</div>
				  		<div class="col-md-6">
				  			<label for="">Segundo Nombre</label>
				  			<input class="form-control" type="text" value="">
				  		</div>
				  	</div>
				  </div>
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label for="">Primer Apellido <span class="text-danger">*</span></label>
				  			<input class="form-control" type="text" value="Perez">
				  		</div>
				  		<div class="col-md-6">
				  			<label for="">Repita el Correo Electrónico <span class="text-danger">*</span></label>
				  			<input class="form-control" type="text" value="Castro">
				  		</div>
				  	</div>
				  </div>
				  <hr>
				  <h2>Información de Domicilio y Contacto</h2>
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label for="">Dirección de Domicilio <span class="text-danger">*</span></label>
				  			<input class="form-control" type="text" value="Calle 126 # 7 - 36">
				  		</div>
				  		<div class="col-md-6">
				  			<label for="">Barrio <span class="text-danger">*</span></label>
				  			<input class="form-control" type="text" value="Villa del Prado">
				  		</div>
				  	</div>
				  </div>
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label for="">Departamento <span class="text-danger">*</span></label>
				  			<select class="form-control" name="" id="">
				  				<option value="">[Seleccione...]</option>
				  			</select>
				  		</div>
				  		<div class="col-md-6">
				  			<label for="">Ciudad / Municipio <span class="text-danger">*</span></label>
				  			<select class="form-control" name="" id="">
				  				<option value="">[Seleccione...]</option>
				  			</select>
				  		</div>
				  	</div>
				  </div>
				  <div class="form-group">
				  	<div class="row">
				  		<div class="col-md-6">
				  			<label for="">Primer Apellido <span class="text-danger">*</span></label>
				  			<input class="form-control" type="text" value="Perez">
				  		</div>
				  		<div class="col-md-6">
				  			<label for="">Repita el Correo Electrónico <span class="text-danger">*</span></label>
				  			<input class="form-control" type="text" value="Castro">
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