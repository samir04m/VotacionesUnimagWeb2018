<?php

require_once ("DataSource.php");
require_once (__DIR__."/../ENTITIES/Mesa.php");

class MesaDAO {

    public function obtenerMesas(){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM mesa");
        $mesa=null;
        $mesas=array();
        foreach($data_table as $indice=>$valor){
            $mesa = new Mesa(
                $data_table[$indice]["id"]
            );
            array_push($mesas, $mesa);
        }
        return $mesas;   
    }

}