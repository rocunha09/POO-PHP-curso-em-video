<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Hello, world!</title>
    </head>
    <body>
    <pre>
    <?php
        require_once 'Caneta.php';

        $c1 = new Caneta();

        $c1->modelo = "BIC cristal";
        $c1->cor = "Azul";
        //$c1->ponta = 0.5;
        //$c1->carga = 50;
        //$c1->tampada = true;

        print_r($c1);
        $c1->rabiscar();
        $c1->tampar();
        $c1->destampar();
    ?>
    </pre>
    </body>
</html>