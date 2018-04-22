<?php

require_once ("DataSource.php");
require_once (__DIR__."/../ENTITIES/Usuario.php");

class UsuarioDAO {

    public function autenticarUsuario($table, $nameRowId, $id, $nameRowPassword, $pass){
        echo "<br>autenticarUsuario en UsuarioDAO id=".$id."  password=".$pass;
        
        $data_source = new DataSource();

        $data_table= $data_source->ejecutarConsulta("SELECT * FROM $table WHERE $nameRowId = :id AND $nameRowPassword = :pass", array(':id'=>$id,':pass'=>$pass));
        
        $usuario=null;

        if(count($data_table) == 1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario (
                        $data_table[$indice]["codigo"],
                        $data_table[$indice]["nombre1"], 
                        $data_table[$indice]["nombre2"], 
                        $data_table[$indice]["apellido1"], 
                        $data_table[$indice]["apellido2"], 
                        $data_table[$indice]["password"], 
                        $data_table[$indice]["rol_id"], 
                        $data_table[$indice]["programa_id"], 
                        $data_table[$indice]["mesa_id"]
                );
                  
            }
           
        } 
        
        return $usuario;
    }

    public function buscarUsuario($table, $nameRow, $value){
        $data_source = new DataSource();
 
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM $table WHERE $nameRow = :value", array(':value'=>$value));
        
        $usuario=null;

        if(count($data_table) == 1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                    $data_table[$indice]["codigo"],
                    $data_table[$indice]["nombre1"], 
                    $data_table[$indice]["nombre2"], 
                    $data_table[$indice]["apellido1"], 
                    $data_table[$indice]["apellido2"], 
                    $data_table[$indice]["password"], 
                    $data_table[$indice]["rol_id"], 
                    $data_table[$indice]["programa_id"], 
                    $data_table[$indice]["mesa_id"]
                );
            }
        }
        return $usuario;
    }

    public function obtenerUsuarios($table){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM $table WHERE rol_id != 'A' ");
        $usuario=null;
        $usuarios=array();
        foreach($data_table as $indice=>$valor){
            $usuario = new Usuario(
                $data_table[$indice]["codigo"],
                $data_table[$indice]["nombre1"], 
                $data_table[$indice]["nombre2"], 
                $data_table[$indice]["apellido1"], 
                $data_table[$indice]["apellido2"], 
                $data_table[$indice]["password"], 
                $data_table[$indice]["rol_id"], 
                $data_table[$indice]["programa_id"], 
                $data_table[$indice]["mesa_id"]
            );
            array_push($usuarios, $usuario);
        }
        return $usuarios;   
    }

    public function insertUsuario_UsuarioDAO(Usuario $usuario, $table){
        $data_source= new DataSource();
        $sql = "INSERT INTO $table (codigo, nombre1, nombre2, apellido1, apellido2, password, rol_id, programa_id, mesa_id) VALUES (:codigo, :nombre1, :nombre2, :apellido1, :apellido2, :password, :rol_id, :programa_id, :mesa_id)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
                ':codigo'=>$usuario->getcodigo(),
                ':nombre1'=>$usuario->getnombre1(),
                ':nombre2'=>$usuario->getnombre2(),
                ':apellido1'=>$usuario->getapellido1(),
                ':apellido2'=>$usuario->getapellido2(),
                ':password'=>$usuario->getpassword(),
                ':rol_id'=>$usuario->getrol_id(),
                ':programa_id'=>$usuario->getprograma_id(),
                ':mesa_id'=>$usuario->getmesa_id()
            )
        );
        
        return $resultado;
    }

    public function updateUsuario_UsuarioDAO(Usuario $usuario, $table){
        $data_source= new DataSource();

        $sql = "UPDATE $table SET nombre1= :nombre1, "
                . " nombre2= :nombre2, "
                . " apellido1= :apellido1, "
                . " apellido2= :apellido2, "
                . " password= :password, "
                . " rol_id= :rol_id, "
                . " mesa_id= :mesa_id, "
                . " programa_id= :programa_id "
                . " WHERE codigo= :codigo ";

        $resultado = $data_source->ejecutarActualizacion($sql, array(
                ':codigo'=>$usuario->getcodigo(),
                ':nombre1'=>$usuario->getnombre1(),
                ':nombre2'=>$usuario->getnombre2(),
                ':apellido1'=>$usuario->getapellido1(),
                ':apellido2'=>$usuario->getapellido2(),
                ':password'=>$usuario->getpassword(),
                ':rol_id'=>$usuario->getrol_id(),
                ':mesa_id'=>$usuario->getmesa_id(),
                ':programa_id'=>$usuario->getprograma_id()
            )
        );
        
        return $resultado;
    }
    
    public function deleteUsuario_UsuarioDAO($table, $nameRowId, $id){
        echo "<br>borrarUsuario en UsuarioDAO id=".$id;
        $data_source = new DataSource();
    
        $resultado = $data_source->eliminar($table, $nameRowId, $id);
   
        return $resultado;
    }

}