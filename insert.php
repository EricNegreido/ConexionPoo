<?php 
  //CONEXION A BASE DE DATOS METODO PDO
  try{
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $edad = $_POST["edad"];

    $base = new PDO("mysql:host=localhost; dbname=prueba_2", "root", "");
    $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

    $sql="INSERT INTO persons (name, last_name, dni, age) VALUES (:nombre,:apellido, :dni, :edad)";

    $result = $base->prepare($sql);

    $result->execute(array(":nombre"=>$nombre, ":apellido"=>$apellido, ":dni"=>$dni, ":edad"=>$edad));

    echo 'se inserto un registro';
    $result->closeCursor();

  }catch(Exception $e){
    die ('Error Message' . $e->GetMessage() . 'Error Codigo' . $e->GetCode()); 

  }finally{
    $base= null; //VACÍO MEMORIA
  }
    
?>

