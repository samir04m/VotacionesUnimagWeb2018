<?php

class MvcController{

	public function pagina(){
		 session_start();
		 // session_destroy();
		if(!isset($_SESSION["LOGIN"])){
			echo "No has iniciado sesion";
			header("location: view/login.php");
			// include (__DIR__ ."/../view/usuario/login.php");
			exit();
		}else{
				// header("location: index.php?action=admin");
			if ($_SESSION["LOGIN"]){
				include (__DIR__ ."/../view/template.php");
				// include (__DIR__ ."/../view/template.php");
				// if ($_SESSION["ROL_USUARIO"] == 1){
				// 	include (__DIR__ ."/../index.php");
				// }else{
				// 	include (__DIR__ ."/../index.php");
				// }
			}
		}
	}

	public function rutasController(){
		
		if (isset($_GET["action"])){
			$rutasController = $_GET["action"];
		}else{
			$rutasController = "login";
		}	
		$respuesta = Rutas::rutasModel($rutasController);

		include $respuesta;
	}

	public function selectRolController(){
    	require_once(__DIR__."/../model/DAO/RolDAO.php");

        $dao = new RolDAO();
        $ArrayRoles = $dao->obtenerRoles();

        foreach ($ArrayRoles as $indice => $valor) {
           	echo '<option value="'.$ArrayRoles[$indice]->getid().'">'.$ArrayRoles[$indice]->getrol().'</option>';
        }
    }

    public function selectProgramaController(){
    	require_once(__DIR__."/../model/DAO/ProgramaDAO.php");

        $dao = new ProgramaDAO();
        $ArrayProgramas = $dao->obtenerProgramas();

        foreach ($ArrayProgramas as $indice => $valor) {
           	echo '<option value="'.$ArrayProgramas[$indice]->getid().'">'.$ArrayProgramas[$indice]->getnombre().'</option>';
        }
    }

    public function selectMesaController(){
    	require_once(__DIR__."/../model/DAO/MesaDAO.php");

        $dao = new MesaDAO();
        $ArrayMesas = $dao->obtenerMesas();

        foreach ($ArrayMesas as $indice => $valor) {
           	echo '<option value="'.$ArrayMesas[$indice]->getid().'">'.$ArrayMesas[$indice]->getid().'</option>';
        }
    }

    public function tablaUsuariosController(){
		require_once "MDB/mdbUsuario.php";

		$respuesta = obtenerUsuarios('usuario');

		foreach ($respuesta as $indice => $valor) {
			echo '<tr>
					<td>'.$respuesta[$indice]->getcodigo().'</td>
					<td>'.$respuesta[$indice]->getnombre1().'</td>
					<td>'.$respuesta[$indice]->getnombre2().'</td>
					<td>'.$respuesta[$indice]->getapellido1().'</td>
					<td>'.$respuesta[$indice]->getapellido2().'</td>
					<td>'.$respuesta[$indice]->getpassword().'</td>
					<td>'.$respuesta[$indice]->getrol_id().'</td>
					<td>'.$respuesta[$indice]->getprograma_id().'</td>
					<td>'.$respuesta[$indice]->getmesa_id().'</td>
					<td><a href="index.php?action=editar&id='.$respuesta[$indice]->getcodigo().'" class="btn btn-floating"><i class="small material-icons">edit</i></a></td>
					<td><a href="index.php?action=admin&idBorrar='.$respuesta[$indice]->getcodigo().'" class="btn red btn-floating"><i class="small material-icons">delete_forever</i></a></td>	
				  </tr>';
		}
	}


	public function deleteUsuarioController(){
	
		require_once "MDB/mdbUsuario.php";

		if (isset($_GET["idBorrar"])){
			$datosController = $_GET["idBorrar"];
			
			$dao = new UsuarioDAO();
	        $respuesta= $dao->deleteUsuario($datosController);

	        echo "<br>enController respuesta ".$respuesta;

			// $respuesta = Datos::borrarUsuarioModel($datosController, "usuario");

			if ($respuesta != 0){
				header("location: index.php?action=admin&seBorro=true");
			
			}else{
				header("location: index.php?action=admin&seBorro=false");
			}

		}
	}




}