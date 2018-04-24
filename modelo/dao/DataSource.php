<?php

class DataSource {

	private $datosConexion;
	private $conexion;

	public function __construct(){

		try {

			$config = fopen(__DIR__."/../../conf/config.json", "r");

			if (!$config){
				die("Error: No se puede abrir el archivo de configuracion!");
			}
			$content = "";
			
			while(!feof($config)){
				$content.= fgets($config);
			}

			$json = json_decode($content, true);

			$this->datosConexion = "mysql:host=".$json['host'].";dbname=".$json['database'].";charset=utf8";

			$this->conexion = new PDO($this->datosConexion, $json['username'], $json['password']);
		
		} catch (PDOException $ex){
			echo $ex->getMessage();
		}

	}

	public function ejecutarConsulta($sql="", $values=array()){

        if($sql != ""){

            $consulta=$this->conexion->prepare($sql);

            $consulta->execute($values);

            $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

            $this->conexion=null;

            return $tabla_datos;

        }else{
            return 0;
        }
    }

    public function ejecutarActualizacion($sql="", $values=array()){
        echo $sql;

        if($sql != ""){

            $consulta=$this->conexion->prepare($sql);

            $consulta->execute($values);

            $numero_tablas_afectadas = $consulta->rowCount();

            $this->conexion=null;

            return $numero_tablas_afectadas;

        }else{

            return 0;

        }

    }

    public function insertar($sql="", $values=array()){

        if($sql != ""){

            $consulta=$this->conexion->prepare($sql);

            $consulta->execute($values);

            $numero_tablas_afectadas = $consulta->rowCount();

            $this->conexion=null;

            return $numero_tablas_afectadas;
        }else{
            return 0;
        }
    }

     public function getRegistros($sql=""){

        echo "<br> DataSource ".$sql;
        
        if($sql != ""){

            $consulta=$this->conexion->prepare($sql);

            $consulta->execute();

            $registros = $consulta->fetchAll();

            $this->conexion=null;

            return $registros;
        }else{
            return 0;
        }
    }

    public function eliminar($tabla, $nameRowId, $id){
        $sql = "DELETE FROM $tabla WHERE $nameRowId = :id";
    
        echo "<br>eliminar en DataSource '".$sql."' donde el id=".$id;

        $consulta = $this->conexion->prepare($sql);

        $consulta->bindParam(":id", $id, PDO::PARAM_INT); //posible error

        $consulta->execute();

        $numero_tablas_afectadas = $consulta->rowCount();

        $this->conexion=null;

        return $numero_tablas_afectadas;

    }


}