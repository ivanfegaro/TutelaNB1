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
				<div class="cntMesaje_rtaTutela">
					
					<div class="row">
						<h2 class="col-md-4">
							Has interpuesto tu acción de tutela con exito.
						</h2>
					</div>
					
					<p>Tu acción de tutela se encuentra en proceso de solicitud, para ver el detalle dirigete al enlace de a continuacion.</p>
					
					<div class="text-center">
						<a href="mis-tutelas.php" class="btn btn-td btn-square">Mis Tutelas</a>
				  	</div>

				</div>
			</div>
		</div>
	</div>

<?php
	include ('footer.php');
?>