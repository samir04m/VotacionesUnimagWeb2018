<?php

require_once ("DataSource.php");
require_once (__DIR__."/../entidades/Facultad.php");

class FacultadDAO {

    public function obtenerFacultades(){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM facultad");
        $Facultad=null;
        $Facultades=array();
        foreach($data_table as $indice=>$valor){
            $Facultad = new Facultad(
                $data_table[$indice]["id"],
                $data_table[$indice]["nombre"]
            );
            array_push($Facultades, $Facultad);
        }
        return $Facultades;   
    }

    public function buscarFacultad($table, $nameRow, $value){
        $data_source = new DataSource();
 
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM $table WHERE $nameRow = :value", array(':value'=>$value));
        
        $Facultad=null;

        if(count($data_table) == 1){
            foreach($data_table as $indice => $valor){
                $Facultad = new Facultad(
                    $data_table[$indice]["id"],
                    $data_table[$indice]["nombre"]
                );
            }
        }
        return $Facultad;
    }

     public function insertFacultad_FacultadDAO(Facultad $objeto, $table){
        $data_source= new DataSource();
        $sql = "INSERT INTO $table (nombre) VALUES (:nombre)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
                ':nombre'=>$objeto->getnombre()
            )
        );
        
        return $resultado;
    }

    public function updateFacultad_FacultadDAO(Facultad $objeto, $table){
        $data_source= new DataSource();

        $sql = "UPDATE $table SET nombre= :nombre WHERE id= :id ";

        $resultado = $data_source->ejecutarActualizacion($sql, array(
                ':id'=>$objeto->getid(),
                ':nombre'=>$objeto->getnombre()
            )
        );
        
        return $resultado;
    }
    
    public function deleteFacultad_FacultadDAO($table, $nameRowId, $id){
        echo "<br>borrarFacultad en FacultadDAO id=".$id;
        $data_source = new DataSource();
    
        $resultado = $data_source->eliminar($table, $nameRowId, $id);
   
        return $resultado;
    }

}