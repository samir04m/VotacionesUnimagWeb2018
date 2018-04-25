<?php
	require_once (__DIR__."/../../mdb/mdbPrograma.php");
          
	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$facultad_id = $_POST['facultad_id'];


        $Programa = updatePrograma_mdbPrograma($id, $nombre, $facultad_id);

        if ($Programa != 0){
        	header("location: ../../../index.php?action=updateOk-programa");  
        }else{
        	header("location: ../../../index.php?action=updateError-programa");  
        }
	}

?>