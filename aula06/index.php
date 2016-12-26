<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula06</title>
  </head>
  <body>

    <pre>



    <?php
      require_once 'ControleRemoto.php';
      require_once 'Controlador.php';

      $c1 = new ControleRemoto();
      $c1->ligar();
      $c1->abrirMenu();
      // var_dump($c1);

     ?>
    </pre>
  </body>
</html>
