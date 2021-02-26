<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Hello, world!</title>
    </head>
    <body>
    <?php
        require_once 'Caneta.php';

        $c1 = new Caneta();

        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = true;

        echo '<pre>';
        print_r($c1);
        echo '</pre>';

        $c1->rabiscar();
        $c1->destampar();
        $c1->rabiscar();
        $c1->tampar();

        echo '<hr>';

        $c2 = new Caneta();

        $c2->cor = "Verde";
        $c2->ponta = 0.5;
        $c2->carga = 50;
        $c2->tampada = true;

        echo '<pre>';
        print_r($c2);
        echo '</pre>';

    ?>
    </body>
</html>