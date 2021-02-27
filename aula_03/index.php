<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Métodos especiais</title>
    </head>
    <body>
    <pre>
    <?php
        require_once 'Caneta.php';

        $c1 = new Caneta("BIC", "AZUL", 0.5);
        $c2 = new Caneta("Mont Blanc", "preta", 0.5);

        print_r($c1);
        echo '<br>';
        $c2->destampar();
        print_r($c2);
    ?>
    </pre>
    </body>
</html>