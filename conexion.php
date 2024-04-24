<?php
  require("config.php");

  class conexion{
    protected $conexion_db;

    public function __construct(){

      $this->conexion_db= new mysqli(DB_HOST, DB_USUARIO, DB_CONTRASEÑA, DB_NOMBRE);
      if($this->conexion_db->connect_errno){
        echo "FALLO AL CONECTAR " . $this->conexion_db->connect_errno;
        return;
      }
      $this->conexion_db->set_charset(DB_CHARSET);
    }
  }
?> 