<?php
  ob_start();
  $mvc = new MvcController();
?>
<div class="container">
	<div class="row">
		<div class="col s12 offset-m1 m10 offset-l3 l6">
			<div class="card-panel grey lighten-3 z-depth-3">
	            <form method="post"  action="controlador/servicios/programa/serv_crearPrograma.php" role="form">
	            	<div class="row">
		            	<div class="input-field col s12">
		            		<input type="text" name="nombre" id="nombre" required>
		            		<label for="nombre">Nombre de Programa</label>
		            	</div>

		            	<div class="input-field col s12">
		            		<select name="facultad_id" id="facultad_id" required>
		            			<option value="" disabled selected>Seleccione un facultad</option>
		            			<?php
				                    $mvc -> selectFacultadController();
				                ?>
		            		</select>
		            	</div>
		             		
	            	</div>
	            	<div class="center">
	            		<button class="btn waves-effect waves-light purple" name="submit">Guardar</button>
	            	</div>
				</form>
				
			</div>
		</div>
	</div>
</div>
