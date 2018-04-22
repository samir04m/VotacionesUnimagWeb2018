<?php

require_once ("DataSource.php");
require_once (__DIR__."/../ENTITIES/Rol.php");

class RolDAO {

	public function obtenerRoles(){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM rol WHERE id != 'A' ORDER BY id DESC");
        $rol=null;
        $roles=array();
        foreach($data_table as $indice=>$valor){
            $rol = new Rol(
                $data_table[$indice]["id"],
                $data_table[$indice]["rol"]
            );
            array_push($roles, $rol);
        }
        return $roles;   
    }


}