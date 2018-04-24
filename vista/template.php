<?php
	  ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal Administrador</title>

	<link rel="stylesheet" href="vista/resources/css/materialize.css">
	<link rel="stylesheet" href="vista/resources/css/estilosTemplate.css">
	<link rel="stylesheet" href="vista/resources/css/material-icons.css">
	
</head>
<body>

	<?php
		include "sections/header.php";
    ?>
	<br>
	<main>
		<?php
	        $mvc = new MvcController();
	        $mvc->rutasController();
	    ?>
	</main>

    <?php
		include "sections/footer.php";
    ?>

	<script type="text/javascript" src="vista/resources/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="vista/resources/js/materialize.js"></script>
	<script type="text/javascript" src="vista/resources/js/scriptTemplate.js"></script>

	
</body>
</html>

<?php
  ob_end_flush();
?>