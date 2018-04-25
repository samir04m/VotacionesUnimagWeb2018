<?php

require_once ("DataSource.php");
require_once (__DIR__."/../entidades/Programa.php");

class ProgramaDAO {

    public function obtenerProgramas(){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM programa");
        $programa=null;
        $programas=array();
        foreach($data_table as $indice=>$valor){
            $programa = new Programa(
                $data_table[$indice]["id"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["facultad_id"]
            );
            array_push($programas, $programa);
        }
        return $programas;   
    }

    public function buscarPrograma($table, $nameRow, $value){
        $data_source = new DataSource();
 
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM $table WHERE $nameRow = :value", array(':value'=>$value));
        
        $programa=null;

        if(count($data_table) == 1){
            foreach($data_table as $indice => $valor){
                $programa = new Programa(
                    $data_table[$indice]["id"],
                    $data_table[$indice]["nombre"],
                    $data_table[$indice]["facultad_id"]
                );
            }
        }
        return $programa;
    }

     public function insertPrograma_ProgramaDAO(Programa $objeto, $table){
        $data_source= new DataSource();
        $sql = "INSERT INTO $table (nombre, facultad_id) VALUES (:nombre, :facultad_id)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
                ':nombre'=>$objeto->getnombre(),
                ':facultad_id'=>$objeto->getfacultad_id()
            )
        );
        
        return $resultado;
    }

    public function updatePrograma_ProgramaDAO(Programa $objeto, $table){
        $data_source= new DataSource();

        $sql = "UPDATE $table SET nombre= :nombre, "
                . " facultad_id= :facultad_id "
                . " WHERE id= :id ";

        $resultado = $data_source->ejecutarActualizacion($sql, array(
                ':id'=>$objeto->getid(),
                ':nombre'=>$objeto->getnombre(),
                ':facultad_id'=>$objeto->getfacultad_id()
            )
        );
        
        return $resultado;
    }
    
    public function deletePrograma_ProgramaDAO($table, $nameRowId, $id){
        echo "<br>borrarPrograma en ProgramaDAO id=".$id;
        $data_source = new DataSource();
    
        $resultado = $data_source->eliminar($table, $nameRowId, $id);
   
        return $resultado;
    }

}