<?php
	$pageTitle = 'Tutelas en Contra';
	include ('header.php');
?>

	<section class="cntTituloPagina">
		<div class="td_container">
			<div class="col-md-6">
				<h2>Tutelas en Contra</h2>
			</div>
			<div class="col-md-6 text-right">
				<ul class="breadcrumbs">
					<li><a href="mis-tutelas.php">Inicio</a></li>
					<li><a href="#">Tutelas en Contra</a></li>
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
						<div class="alert alert-info square" role="alert">No tienes acciones de tutela en contra...</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>

<?php
	include ('footer.php');
?>