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
	<title>Pagina no encontrada</title>

	<link rel="stylesheet" href="resources/css/materialize.css">
	<link rel="stylesheet" href="resources/css/estilos.css">

</head>
<body>
	<div class="content">
		<div class="center">
			<h1>No se ha encontrado nada</h1>
		</div>
	</div>

	
	<script type="text/javascript" src="resources/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="resources/js/materialize.js"></script>


</body>
</html>