<?php 
  //CONEXION A BASE DE DATOS METODO PDO
  try{
    $dni = $_GET["eliminar"];

    $base = new PDO("mysql:host=localhost; dbname=prueba_2", "root", "");
    $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

    $sql="DELETE FROM persons WHERE dni=:dni";

    $result = $base->prepare($sql);

    $result->execute(array(":dni"=>$dni));

    echo 'se elimino un registro';
    $result->closeCursor();

  }catch(Exception $e){
    die ('Error Message' . $e->GetMessage() . 'Error Codigo' . $e->GetCode()); 

  }finally{
    $base= null; //VACÍO MEMORIA
  }
    
?>

