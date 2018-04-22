<?php
	require_once (__DIR__."/../MDB/mdbUsuario.php");
          
	if(isset($_POST['submit'])){
		echo "<br>Se presiono boton sumit";
		$errMsg = '<br>';

		$codigo = $_POST['codigo'];
		$nombre1 = $_POST['nombre1'];
		$nombre2 = $_POST['nombre2'];
		$apellido1 = $_POST['apellido1'];
		$apellido2 = $_POST['apellido2'];
		$password = $_POST['password'];
		$rol_id = $_POST['rol_id'];
		$programa_id = $_POST['programa_id'];
		$mesa_id = $_POST['mesa_id'];

        $usuario = insertUsuario_mdbUsuario($codigo, $nombre1, $nombre2, $apellido1, $apellido2, $password, $rol_id, $programa_id, $mesa_id);

        if ($usuario != 0){
        	header("location: ../../index.php?action=createOk");  

        }else{
        	echo $usuario;
        }
	}

?>