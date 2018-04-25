<?php
	require_once (__DIR__."/../../mdb/mdbPrograma.php");
          
	if(isset($_POST['submit'])){
		echo "<br>Se presiono boton sumit";

		$nombre = $_POST['nombre'];
		$facultad_id = $_POST['facultad_id'];

        $programa = insertPrograma_mdbPrograma(0, $nombre, $facultad_id);

        if ($programa != 0){
        	header("location: ../../../index.php?action=createOk-programa");  

        }else{
        	echo $programa;
        }
	}

?>