<?php 
  //CONEXION A BASE DE DATOS METODO PDO
  try{
    $data = $_GET["buscar"];
    $base = new PDO("mysql:host=localhost; dbname=prueba_2", "root", "");
    $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

    $sql="SELECT name, last_name, dni, age FROM persons WHERE name=?";

// prepare devuelve un objeto PDOstatment
// public PDO::prepare(string $statement, array $driver_options = array()): PDOStatement
// Prepara una sentencia SQL para ser ejecutada por el método PDOStatement::execute(). 
// La sentencia SQL puede contener cero o más marcadores de parámetros con nombre (:name) o signos de interrogación (?) 
// por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada. 
    $result = $base->prepare($sql);

// llamar a PDOStatement::bindParam() 
// y/o PDOStatement::bindValue() para vincular variables 
// o valores (respectivamente) a los marcadores de parámetros.
    // $result->bindValue(':name', $name, PDO::PARAM_STR);
// EJECUTO SENTENCIA
    $result->execute(array($data));

    while($reg=$result->fetch(PDO::FETCH_ASSOC)){
      echo $reg["name"] . " - ";
      echo $reg["last_name"] . " - ";
      echo $reg["dni"] . " - ";
      echo $reg["age"];

    }
    $result->closeCursor();

  }catch(Exception $e){
    die ('Error ' . $e->GetMessage()); 

  }finally{
    $base= null; //VACÍO MEMORIA
  }
?>