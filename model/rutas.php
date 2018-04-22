<?php
	class Rutas{

		public function enlacesPaginasModel($rutasModel){

			if ($rutasModel == "login"){
				$module = "view/login.php";
			}
			else if ($rutasModel == "admin" || $rutasModel == "ok" || $rutasModel == "updateOk" || $rutasModel == "updateError"){
				$module = "view/administrador/gestionar_usuarios.php";
			}
			// else if ($rutasModel == "fallo"){
			// 	$module = "view/modules/ingresar.php";
			// }
			else if ($rutasModel == "formUsuario"){
				$module = "view/usuario/formulario.php";
			}
			else if ($rutasModel == "cerrarSesion"){
				$module = "controllers/SERVICES/serv_logout.php";
			}
			else{
				$module = "view/noFound.php";
			}

			return $module;
		}

		public function direccionarTemplateModel($rutasModel){
			if ($rutasModel == 'template'){
				$module = "views/template.php";
			}else{
				$module = "";
			}
			return $module;
		}

	}
?>
