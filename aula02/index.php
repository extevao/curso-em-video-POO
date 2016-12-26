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
      $c1->cor = "Azul";
      $c1->pont = 0.5;
      $c1->tampada = true;

      $c1->rabiscar();

      var_dump($c1);
     ?>

  </body>
</html>
