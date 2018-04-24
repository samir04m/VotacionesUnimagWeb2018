<?php
	require_once "controlador/controller.php";
	require_once "controlador/mdb/mdbUsuario.php";

	require_once "modelo/rutas.php";
	
	$mvc = new MvcController();
	$mvc->pagina();

?>