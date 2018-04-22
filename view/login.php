<?php
	if (isset($_SESSION['ROL_USUARIO'])){
		echo 'rol del usuario logeado='.$_SESSION['ROL_USUARIO'];
		header("Location: index.php?action=admin");
	}else{
		echo '<br>no iniciada';
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

	<link rel="stylesheet" href="resources/css/materialize.css">
	<link rel="stylesheet" href="resources/css/estilos.css">

</head>
<body id="index">

	<section class="valign-wrapper">
		<div class="container">
			<div class="row">
				<div class="col s12 offset-m1 m10 offset-l3 l6">
					<div class="card" id="card-login">
						<form action="../controller/SERVICES/serv_loginUsuario.php" method="POST" role="form">
							<div class="card-content grey lighten-4">
								<div class="center-align"><b>Inicio de sesión</b></div>
								<hr><br>
								<div class="input-field">
									<input type="number" name="codigo" id="codigo" required="required">
									<label for="codigo">Número de codigo:</label>
								</div>
								<div class="input-field">
									<input type="password" name="password" id="password" required="required">
									<label for="password">Contraseña</label>
								</div>						
								<a href="#!" id="recordarDatos">Ver usuarios de prueba</a>
							</div>
							<div class="card-action center-align purple lighten-4">
								<button type="submit" name='submit' value="Submit" class="btn btn-large waves-effect waves-light purple hoverable" id="btnLogin">Ingresar</button>
							</div>
						</form>

					</div>
						<?php              
			                if (isset($_GET["action"])){
				                  if ($_GET["action"] == "fallo"){
				                    echo '<div class="card-panel red white-text">El usuario o la contraseña son incorrectos</div>';
				                  }
			                }
		              	?>
				</div>
			</div>
		</div>
	</section>

	<div id="myModal" class="modal">
		<div class="modal-content">
			<h4 id="titulo-modal"></h4>
			<p class="flow-text" id="mensaje-modal"></p>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-purple btn-flat">Cerrar</a>
		</div>
	</div>

	<script type="text/javascript" src="resources/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="resources/js/materialize.js"></script>

	<script type="text/javascript">
		$(function(){
			$('#codigo').val("2018110100");	
			$('#password').val("admin");	
			var mensaje = '';
			<?php 
				// session_start();
				// if (isset($_SESSION['msjError']) ){
				// 	echo 'mensaje = "'.$_SESSION['msjError'].'";';
				// }
				// session_destroy();
			?>
			if (mensaje != '') mostrarModal('ATENCIÓN', mensaje);
		});
	</script>

</body>
</html>