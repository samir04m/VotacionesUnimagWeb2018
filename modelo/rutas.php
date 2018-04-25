<?php
	class Rutas{

		public function rutasModel($rutasModel){

			if ($rutasModel == "login"){
				$result = "vista/login.php";
			}
			else if ($rutasModel == "admin" || $rutasModel == "createOk" || $rutasModel == "updateOk" || $rutasModel == "updateError"){
				$result = "vista/administrador/gestionar_usuarios.php";
			}
			else if ($rutasModel == "form-usuario"){
				$result = "vista/usuario/formulario.php";
			}
			else if ($rutasModel == "editar-usuario"){
				$result = "vista/usuario/editar.php";
			}
			else if ($rutasModel == "admin-programa" || $rutasModel == "createOk-programa" || $rutasModel == "updateOk-programa" || $rutasModel == "updateError-programa"){
				$result = "vista/administrador/gestionar_programas.php";
			}
			else if ($rutasModel == "form-programa"){
				$result = "vista/programa/form-programa.php";
			}
			else if ($rutasModel == "editar-programa"){
				$result = "vista/programa/editar-programa.php";
			}
			else if ($rutasModel == "cerrarSesion"){
				$result = "controlador/servicios/serv_logout.php";
			}

			return $result;
		}

	}
?>
