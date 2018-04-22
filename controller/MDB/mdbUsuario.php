<?php

    function autenticarUsuario($table, $nameRowId, $id, $nameRowPassword, $password){
        echo "<br>autenticarUsuario";
        require_once(__DIR__."/../../model/DAO/UsuarioDAO.php");
        $dao = new UsuarioDAO();
        $usuario = $dao->autenticarUsuario($table, $nameRowId, $id, $nameRowPassword, $password);
        return $usuario;
    }

    function obtenerUsuarios($table){
        require_once(__DIR__."/../../model/DAO/UsuarioDAO.php");
        $dao=new UsuarioDAO();
        $usuario = $dao->obtenerUsuarios($table);
        return $usuario;
    }

    function buscarUsuario($table, $row, $value){
        require_once(__DIR__."/../../model/DAO/UsuarioDAO.php");
        $dao=new UsuarioDAO();
        $usuario = $dao->buscarUsuario($table, $row, $value);
        return $usuario;
    }
    
    function insertUsuario_mdbUsuario($codigo, $nombre1, $nombre2, $apellido1, $apellido2, $password, $rol_id, $programa_id, $mesa_id){

        require_once(__DIR__."/../../model/DAO/UsuarioDAO.php");
        require_once(__DIR__."/../../model/ENTITIES/Usuario.php");

        $objectUsuario = new Usuario($codigo, $nombre1, $nombre2, $apellido1, $apellido2, $password, $rol_id, $programa_id, $mesa_id);
        
        $dao = new UsuarioDAO();
        $resultado = $dao->insertUsuario_UsuarioDAO($objectUsuario , 'usuario');
        return $resultado;
    }

    function updateUsuario_mdbUsuario($codigo, $nombre1, $nombre2, $apellido1, $apellido2, $password, $rol_id, $programa_id, $mesa_id){

        require_once(__DIR__."/../../model/DAO/UsuarioDAO.php");
        require_once(__DIR__."/../../model/ENTITIES/Usuario.php");

        $objectUsuario = new Usuario($codigo, $nombre1, $nombre2, $apellido1, $apellido2, $password, $rol_id, $programa_id, $mesa_id);
        
        $dao = new UsuarioDAO();
        $resultado = $dao->updateUsuario_UsuarioDAO($objectUsuario , 'usuario');
        return $resultado;
    }

    function deleteUsuario_mdbUsuario($table, $row, $value){
        require_once(__DIR__."/../../model/DAO/UsuarioDAO.php");
        $dao = new UsuarioDAO();
        $resultado=$dao->deleteUsuario_UsuarioDAO($table, $row, $value);
        return $resultado;
    }     