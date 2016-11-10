<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tabla multiplicar</title>
  </head>
  <body>

    <?php

//Array
    $tablas=[
    "primera"=>5,
    "segunda"=>13,
    "tercera"=>11,
    ];

//Foreach

foreach ($tablas as $valor) {

echo "<h1>Tabla del $valor </h1>";


//For
for ($i=1; $i <=10; $i++){

$multiplicar = $i * $valor;

echo "$valor x $i = $multiplicar <br>";

}

}

     ?>
  </body>
</html>
