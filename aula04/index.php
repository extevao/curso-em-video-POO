<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 04 POO</title>
  </head>
  <body>
    <pre>

      <?php
        require_once 'Caneta.php';
        $c1 = new Caneta("BIC", "Azulx", 0.5);

        $c2 = new Caneta("TESTE", "VERMELHO", 1.0);

        print_r($c1);
        print_r($c2);

      ?>

    </pre>


  </body>
</html>
