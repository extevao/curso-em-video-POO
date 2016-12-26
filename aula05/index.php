<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>


      <?php
        require_once 'Conta.php';
        $c1 = new Conta();

        $c1->abrirConta('CC');

        $c1->depositar(10);

        $c1->sacar(100);

        print_r($c1);
       ?>

      </pre>
  </body>
</html>
