<?php
	class Rutas{

		public function rutasModel($rutasModel){

			if ($rutasModel == "login"){
				$result = "vista/login.php";
			}
			else if ($rutasModel == "admin" || $rutasModel == "createOk" || $rutasModel == "updateOk" || $rutasModel == "updateError"){
				$result = "vista/administrador/gestionar_usuarios.php";
			}
			// else if ($rutasModel == "fallo"){
			// 	$result = "vista/modules/ingresar.php";
			// }
			else if ($rutasModel == "formUsuario"){
				$result = "vista/usuario/formulario.php";
			}
			else if ($rutasModel == "editarUsuario"){
				$result = "vista/usuario/editar.php";
			}
			else if ($rutasModel == "cerrarSesion"){
				$result = "controlador/servicios/serv_logout.php";
			}

			return $result;
		}

	}
?>
