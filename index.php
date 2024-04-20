<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $conexion = new mysqli("localhost", "root", "", "prueba_2");

    if($conexion->connect_errno){
      echo "Fallo la conexión :" . $conexion->connect_errno;
    }

    $conexion->set_charset("utf8");

    $sql = "SELECT * FROM persons";

    $resultados = $conexion->query($sql);

    if($conexion->errno){
      die($conexion->error);//termino la conexion sin falla la consulta sql
    }

    while($fila= $resultados->fetch_assoc()){
      echo $fila["dni"] . " ";
          echo $fila["name"] . " ";
          echo $fila["last_name"];
          echo $fila["age"] . "<br>";
    }
  $conexion->close();

  ?>  

</body>
</html>