<?php 
  require ("conexion.php");

  class retornaPersonas extends conexion{
  public function __construct(){
    parent::__construct(); //LLamamos  al constructor de la clase padre, osea la conexion
  }
  public function get_personas(){
    //podemos usar conexion_db por el extends, heredamos variable de la clase conexion
    $resultados = $this->conexion_db->query('SELECT * FROM persons');
    $personas = $resultados->fetch_all(MYSQLI_ASSOC);
    return $personas;
  }
  } 
?>