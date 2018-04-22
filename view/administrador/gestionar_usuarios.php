<center>
    <h4>Administrador de Usuarios</h4>
</center>

<div class="row">
	
	<div class="col s12">
		<table class="striped responsive-table highlight">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>2do Nombre</th>
					<th>Apellido</th>
					<th>2do Apellido</th>
					<th>Contraseña</th>
					<th>Rol</th>
					<th>Programa</th>
					<th>Mesa</th>
				</tr>
			</thead>
			<tbody>
				 <?php
                    $vistaUsuario = new MvcController();
                    $vistaUsuario -> tablaUsuariosController();
                    $vistaUsuario -> deleteUsuarioController();
                ?>
			</tbody>
		</table>
	</div>
</div>
<div class="row center"> 
	Crear un Nuevo Usuario <a href="index.php?action=formUsuario" class="btn waves-effect blue btn-floating waves-light"><i class="material-icons">add</i></a>
</div>
<div class="container">
	
	<?php

        if (isset($_GET["action"])){
            if($_GET["action"] == "createOk"){
            	$mensaje = ' Se a registrado un nuevo usuario! ';
            	$color = 'cyan';
           	
				$alerta = '<div class="card-panel '.$color.'">Notificacion : '.$mensaje.'</div>';
              	echo $alerta;
            }
            if($_GET["action"] == "updateError"){
            	$mensaje = ' No se puede actualizar el usuario! ';
            	$color = 'red';
           	
				$alerta = '<div class="card-panel '.$color.'">Notificacion : '.$mensaje.'</div>';
              	echo $alerta;
            }
            if($_GET["action"] == "updateOk"){
            	$mensaje = ' Se ha actualizado el usuario correctamente! ';
            	$color = 'green';
           	
				$alerta = '<div class="card-panel '.$color.'">Notificacion : '.$mensaje.'</div>';
              	echo $alerta;
            }
        }
        if (isset($_GET["seBorro"])){
            if($_GET["seBorro"] == "true"){
            	$mensaje = ' Eliminacion exitosa! ';
            	$color = 'green';
            }else if($_GET["seBorro"] == "true"){
            	$mensaje = ' No se pudo eliminar! ';
            	$color = 'red';
            }
			$alerta = '<div class="card-panel '.$color.'">Notificacion : '.$mensaje.'</div>';
              echo $alerta;
        }
    ?>	
</div>