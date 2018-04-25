<div class="container">
    <?php
        include (__DIR__."/../sections/panel-navegacion.php");
    ?>
</div>

<center>
    <h4>Administrador de Programas</h4>
</center>

<div class="row">
	
	<div class="col s12">
		<table class="striped responsive-table highlight">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Facultad</th>
				</tr>
			</thead>
			<tbody>
				 <?php
                    $vistaUsuario = new MvcController();
                    $vistaUsuario -> tablaProgramaController();
                    $vistaUsuario -> deleteProgramaController();
                ?>
			</tbody>
		</table>
	</div>
</div>
<div class="row center"> 
	Crear un Nuevo Programa <a href="index.php?action=form-programa" class="btn waves-effect blue btn-floating waves-light"><i class="material-icons">add</i></a>
</div>
<div class="container">
	
	<?php

        if (isset($_GET["action"])){
            if($_GET["action"] == "createOk-programa"){
            	$mensaje = ' Se ha registrado un nuevo programa! ';
            	$color = 'blue';
           	
				$alerta = '<div class="card-panel '.$color.'">Notificacion : '.$mensaje.'</div>';
              	echo $alerta;
            }
            if($_GET["action"] == "updateError-programa"){
            	$mensaje = ' No se puede actualizar el programa! ';
            	$color = 'red';
           	
				$alerta = '<div class="card-panel '.$color.'">Notificacion : '.$mensaje.'</div>';
              	echo $alerta;
            }
            if($_GET["action"] == "updateOk-programa"){
            	$mensaje = ' Se ha actualizado el programa correctamente! ';
            	$color = 'green';
           	
				$alerta = '<div class="card-panel '.$color.'">Notificacion : '.$mensaje.'</div>';
              	echo $alerta;
            }
        }
        if (isset($_GET["seBorro"])){
            if($_GET["seBorro"] == "true"){
            	$mensaje = ' Eliminacion exitosa! ';
            	$color = 'green';
            }else if($_GET["seBorro"] == "false"){
            	$mensaje = ' No se pudo eliminar. Es posible que este registro tenga una relacion con otra tabla! ';
            	$color = 'red';
            }
			$alerta = '<div class="card-panel '.$color.'">Notificacion : '.$mensaje.'</div>';
              echo $alerta;
        }
    ?>	
</div>


<div id="modal-confirmarEliminacion" class="modal">
    <div class="modal-content center-align">
        <h5>Confirmar eliminación!!</h5><hr><br>
       <h4> ¿Está seguro de eliminar a este Programa? </h4>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-light btn red" id="btnEliminar">Si, eliminar</a>
    </div>
 </div>