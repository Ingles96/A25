<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Numero hombres y mujeres semanales</title>
  </head>
  <body>
    <?php
    include "calculosGYM.php";
    //echo "Numero de socios en lunes:". $_POST["lunes"];
    $gestor=new CalculosGym();

    //añadimos el lunes
    foreach ($_POST as $key => $value) {
      $gestor->nuevoHombre($value);
    }

    foreach ($_POST as $key => $value) {
      $gestor->nuevoMujer($value);
    }

    $gestor->nuevoHombre($_POST["lunes"]);
    $gestor->nuevoHombre($_POST["martes"]);
    $gestor->nuevoHombre($_POST["miercoles"]);
    $gestor->nuevoHombre($_POST["jueves"]);
    $gestor->nuevoHombre($_POST["viernes"]);
    $gestor->nuevoHombre($_POST["sabado"]);

    $gestor->nuevoMujer($_POST["lunes"]);
    $gestor->nuevoMujer($_POST["martes"]);
    $gestor->nuevoMujer($_POST["miercoles"]);
    $gestor->nuevoMujer($_POST["jueves"]);
    $gestor->nuevoMujer($_POST["viernes"]);
    $gestor->nuevoMujer($_POST["sabado"]);

    //Calcula la media de hombres y de mujeres
    echo "Numero total de hombres: " .$gestor->mediaHombres();
    echo "<br>Numero total de mujeres: " .$gestor->mediaMujeres();
     ?>

  </body>
</html>
