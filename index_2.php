<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  //CONEXION A BASE DE DATOS METODO PDO
  try{
    $base = new PDO("mysql:host=localhost; dbname=prueba_2", "root", "");
    echo 'Conexión Ok';
  }catch(Exception $e){
    die ('Error ' . $e->GetMessage()); 

  }finally{
    $base= null; //VACÍO MEMORIA
  }
    
  ?>
</body>
</html>