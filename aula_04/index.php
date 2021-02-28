<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>exemplo prático com objetos</title>
    </head>
    <body>
    <pre>
    <?php
        require_once 'Conta.php';

        $c1 = new Conta();

        $c1->abrirConta("cc");
        $c1->setDono("Jubileu");
        $c1->setNumConta(1234);
        print_r($c1);
        echo '<br>';
        $c1->depositar(300);
        $c1->pagarMensal();

        echo '<hr>';

        $c2 = new Conta();

        $c2->abrirConta("cp");
        $c2->setDono("Creuza");
        $c2->setNumConta(4567);
        print_r($c2);
        echo '<br>';
        $c2->depositar(500);
        $c2->sacar(100);
        $c2->pagarMensal();
        $c2->sacar(5000);
        $c2->fecharConta();
        $c2->sacar(530);
        $c2->fecharConta();

    ?>
    </pre>
    </body>
</html>