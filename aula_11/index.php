<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>pilares POO: polimorfismo</title>
    </head>
    <body>
    <h4>Polimorfismo:</h4>
        <pre>
            <?php
                require_once 'Animal.php';
                require_once 'Mamifero.php';
                require_once 'Lobo.php';
                require_once 'Cachorro.php';

                $c = new Cachorro();

                echo "<div style='background-color: gray'>";

                $c->setPeso(55.30);
                $c->setIdade(3);
                $c->setMembros(4);
                print_r($c);
                $c->emitirSom();

                $c->reagirFrase("ola");
                $c->reagirFrase("vai apanhar");
                $c->reagirHora(11, 45);
                $c->reagirHora(21, 00);
                $c->reagirDono(true);
                $c->reagirDono(false);
                $c->reagirIdade(2, 12.5);
                $c->reagirIdade(17, 4.5);
                echo '<hr>';

                echo '</div>';


            ?>
        </pre>
    </body>
</html>