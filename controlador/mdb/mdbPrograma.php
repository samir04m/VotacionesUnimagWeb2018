<?php
    
    function obtenerProgramas_mdbPrograma($table){
        require_once(__DIR__."/../../modelo/dao/ProgramaDAO.php");
        $dao=new ProgramaDAO();
        $Programa = $dao->obtenerProgramas($table);
        return $Programa;
    }

    function buscarPrograma($table, $row, $value){
        require_once(__DIR__."/../../modelo/dao/ProgramaDAO.php");
        $dao=new ProgramaDAO();
        $Programa = $dao->buscarPrograma($table, $row, $value);
        return $Programa;
    }

    function insertPrograma_mdbPrograma($id, $nombre, $facultad_id){

        require_once(__DIR__."/../../modelo/dao/ProgramaDAO.php");
        require_once(__DIR__."/../../modelo/entidades/Programa.php");

        $objectPrograma = new Programa(0, $nombre, $facultad_id);
        
        $dao = new ProgramaDAO();
        $resultado = $dao->insertPrograma_ProgramaDAO($objectPrograma , 'programa');
        return $resultado;
    }

    function updatePrograma_mdbPrograma($id, $nombre, $facultad_id){

        require_once(__DIR__."/../../modelo/dao/ProgramaDAO.php");
        require_once(__DIR__."/../../modelo/entidades/Programa.php");

        $objectPrograma = new Programa($id, $nombre, $facultad_id);
        
        $dao = new ProgramaDAO();
        $resultado = $dao->updatePrograma_ProgramaDAO($objectPrograma , 'programa');
        return $resultado;
    }

    function deletePrograma_mdbPrograma($table, $row, $value){
        require_once(__DIR__."/../../modelo/dao/ProgramaDAO.php");
        $dao = new ProgramaDAO();
        $resultado=$dao->deletePrograma_ProgramaDAO($table, $row, $value);
        return $resultado;
    }