<?php
    Class conexion extends Mysqli
    {
      function_construct()
      {
        $servidor="localhost";
        $pass="";
        $user="root";
        $DB="Inventario5toDiver";
        
        parent::_construct($servidor,$user,$pass,$DB);
        $this->query(SET NAMES 'utf8'; ");
        $this->connect_errno ? die('Error en la conexion'): $error="conectado a ".$DB;
