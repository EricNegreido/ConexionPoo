<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index_2.php" method="get">
    <label for="buscar"> Buscar Nombre: </label>
    <input name="buscar" type="text">
    <input type="submit" name="buscando" value="buscar">
  </form>
  <form action="insert.php" method="post"> 
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" placeholder="Eric, Tomas, ...">
    <label for="apellido"> Apellido: </label>
    <input type="text" name="apellido"  placeholder="Rodriguez, Gonzales, ...">
    <label for="dni">Dni: </label>
    <input type="number" name="dni" placeholder="38140391">
    <label for="edad">Edad: </label>
    <input type="number" name="edad" placeholder="25, 40, ...">
    <input type="submit" name="insertar" value="insertar">
  </form>
</body>
</html>