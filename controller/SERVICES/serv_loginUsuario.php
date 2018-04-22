<?php
       
    require_once (__DIR__."/../MDB/mdbUsuario.php");
        
	if(isset($_POST['submit'])){
        echo "<br>Se presiono boton sumit";

		$errMsg = '<br>';
		//username and password sent from Form
		$codigo = $_POST['codigo'];
		$password = $_POST['password'];
        $usuario = autenticarUsuario($codigo, $password);
        
		if($usuario != NULL){
            if ($usuario->getrol_id() == 'A'){

                session_start();
                
                $_SESSION["LOGIN"] = true;

                $_SESSION['COGIGO_USUARIO'] = $usuario->getIdUsuario();
                $_SESSION['NOMBRE_USUARIO'] = $usuario->getnombre();
                $_SESSION['APELLIDO_USUARIO'] = $usuario->getapellido();
                $_SESSION['ROL_USUARIO'] = $usuario->getRol_idRol();

                header("Location: index.php");
                
            }else{
                 header("Location: index.php?action=noPage");
            }


		}else{
            $errMsg .= 'No se encontro ningun usuario con estos datos';
            echo $errMsg;    
            header("location: index.php?action=fallo");                
            // header("Location: ../../index.php");
   
		}
        
	}

        
                
?>
