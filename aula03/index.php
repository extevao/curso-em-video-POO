<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 02 POO</title>
  </head>
  <body>

    <?php
      require_once 'Caneta.php';
      $c1 = new Caneta();

      $c1->modelo = "BIC cristal";

      $c1->tampar();

      var_dump($c1);

     ?>

  </body>
</html>
