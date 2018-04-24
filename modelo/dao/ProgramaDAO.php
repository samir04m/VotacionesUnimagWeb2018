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

}