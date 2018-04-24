<?php
  ob_start();
  $mvc = new MvcController();
?>
<div class="container">
	<div class="row">
		<div class="col s12 offset-m1 m10 offset-l2 l8">
			<div class="card-panel grey lighten-3 z-depth-3">
	            <form method="post"  action="controlador/servicios/serv_crearUsuario.php" role="form">
	            	<div class="row">
		            	<div class="input-field col s12 m6">
		            		<input type="number" name="codigo" id="codigo" required>
		            		<label for="codigo">Codigo</label>
		            	</div>

		            	<div class="input-field col s12 m6">
		            		<input type="password" name="password" id="password" required>
		            		<label for="password">Contraseña</label>
		            	</div>

		            	<div class="input-field col s12 m6">
		            		<input type="text" name="nombre1" id="nombre1" required>
		            		<label for="nombre1">Primer Nombre</label>
		            	</div>

		            	<div class="input-field col s12 m6">
		            		<input type="text" name="nombre2" id="nombre2" required>
		            		<label for="nombre2">Segundo Nombre</label>
		            	</div>

		            	<div class="input-field col s12 m6">
		            		<input type="text" name="apellido1" id="apellido1" required>
		            		<label for="apellido1">Primer Apellido</label>
		            	</div>

		            	<div class="input-field col s12 m6">
		            		<input type="text" name="apellido2" id="apellido2" required>
		            		<label for="apellido2">Segundo Apellido</label>
		            	</div>
		            	
		            	<div class="input-field col s12 m6">
		            		<select name="rol_id" id="rol_id" required>
		            			<option value="" disabled selected>Seleccione un Rol</option>
		            			<?php
				                    $mvc -> selectRolController();
				                ?>
		            		</select>
		            	</div>
		            	<div class="input-field col s12 m6">
		            		<select name="mesa_id" id="mesa_id" required>
		            			<option value="" disabled selected>Seleccione una Mesa</option>
		            			<?php
				                    $mvc -> selectMesaController();
				                ?>
		            		</select>
		            	</div>
		            	<div class="input-field col s12">
		            		<select name="programa_id" id="programa_id" required>
		            			<option value="" disabled selected>Seleccione un Programa</option>
		            			<?php
				                    $mvc -> selectProgramaController();
				                ?>
		            		</select>
		            	</div>
		             		
	            	</div>
	            	<div class="center">
	            		<button class="btn waves-effect waves-light purple" name="submit">Guardar</button>
	            	</div>
				</form>

	          	<?php
	            	if(isset($_GET["action"])){
	            	  	if($_GET["action"] == "ok"){
		    	            echo '<br><div class="card-panel green">Registro exitoso!!</div>' ;
		              	}
		            }
	          	?>
				
			</div>
		</div>
	</div>
</div>
