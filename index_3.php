<?php 
  require ("personas.php");
  $personas = new retornaPersonas();
  $array_personas = $personas->get_personas();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<body>
  <?php
    foreach($array_personas as $elem){
      echo "<table><tr><td>";
      echo $elem['name'] . "</td><td>";
      echo $elem['last_name'] . "</td><td>";
      echo $elem['dni'] . "</td><td>";
      echo $elem['age'] . "</td><td></tr></table>";
    } 
    ?>
</body>
</html>