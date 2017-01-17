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
				<div class="cntPreview_tutela">
					
					<h2>Resumen de la Acción de Tutela</h2>
					
					<p>
					Señor <br>
					Juez (reparto) <br>
					Ciudad <br>
					</p>
					
					<p>
					Referencia: Acción de tutela
					</p>
					
					<p>
					Accionante: David Armando Suarez Gutiérrez <br>
					Accionado: Luis Alejandro Duarte Gonzales	
					</p>
					
					<p>
					David Armando Suarez Gutiérrez, mayor de edad, identificado con Cedula de Ciudadanía No. 1033765452, domiciliado en la Carrera 97F # 26 – 75 de la ciudad de Bogotá D.C., actuando en nombre propio, acudo respetuosamente ante su despacho para promover Acción de Tutela, de conformidad con el artículo 86 de la Constitución Política y los Decretos Reglamentarios 2591 de 1.991 y 1382 de 2.000, para que judicialmente se me (le) conceda la protección de los derechos constitucionales fundamentales que considero vulnerados y/o amenazados por las acciones y/o omisiones de la autoridad pública (o el particular, según el caso) que mencioné en la referencia de este escrito.
					</p>
					
					<p>
					Fundamento mi petición en los siguientes:
					</p>
					
					<h5>Acción u Omisión (*)</h5>

					<p>Detalle en este espacio de manera clara y completa los hechos sucedidos</p>

					<h5>Derechos vulnerados y/o amenazados</h5>

					<p> Derecho a la salud</p>

					<h5>Petición</h5>

					<p>Con fundamento en los hechos narrados y en las consideraciones expuestas, respetuosamente solicito al señor Juez TUTELAR a mi favor los derechos constitucionales fundamentales invocados ORDENÁNDOLE a la autoridad accionada que (detalle en este espacio la orden que pretende Que el Juez declare para la protección de sus derechos)</p>

					<h5>Anexos y/o pruebas</h5>
					
					<ul>
						<li class="tooltip_docu"> Aqui va el texto
							<span class="tooltiptext_docu">
								<div id="doc_testSite"></div>
							</span>
						</li>
						<li>respuesta-eps.jpg</li>
						
					</ul>
					
					<p>
					<a href="#" id="trigger">this link</a>.
					</p>
					
					<!-- HIDDEN / POP-UP DIV -->
					<div id="pop-up">
					  <h3>Pop-up div Successfully Displayed</h3>
					  <p>
						This div only appears when the trigger link is hovered over.
						Otherwise it is hidden from view.
					  </p>
					</div>
					
					
					
					<h5>Juramento</h5>

					<p>Bajo la gravedad del juramento manifiesto que por los mismos hechos y derechos, no he
					Presentado petición similar ante ninguna autoridad judicial.</p>

					<h5>Notificaciones</h5>

					<p>Accionante recibirá las notificaciones en la Carrera 97F # 26 – 75, barrio Tierra Buena y numero telefónico 1 No. 3208653412 – numero telefónico 2 No. 5678920.</p>

					<p>El Accionado recibirá las notificaciones en la  Calle 170 # 47 – 51, barrio Villa del Prado y numero telefónico 1 No. 4444885.</p>
					
					<div class="text-center">
						<a class="btn btn-td-gray btn-square" href="interponer-tutela.php">Volver</a>
						<a href="mensajeRe_tutela.php" class="btn btn-td btn-square">Finaliza Proceso</a>
				  	</div>

				</div>
			</div>
		</div>
	</div>

<?php
	include ('footer.php');
?>