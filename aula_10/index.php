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
                require_once 'Reptil.php';
                require_once 'Peixe.php';
                require_once 'Ave.php';

                require_once 'Canguru.php';
                require_once 'Cachorro.php';
                require_once 'Cobra.php';
                require_once 'Tartaruga.php';
                require_once 'Arara.php';

                $m = new Mamifero();
                $r = new Reptil();
                $p = new Peixe();
                $a = new Ave();

                $m2 = new Mamifero();
                $c = new Canguru();
                $k = new Cachorro();

                echo "<div style='background-color: gray'>";
                $m->setCorPelo("branco");
                $m->setPeso(85.3);
                $m->setIdade(2);
                $m->setMembros(4);
                print_r($m);
                $m->locomover();
                $m->alimentar();
                $m->emitirSom();
                echo '<hr>';

                $p->setCorEscama("prateada");
                $p->setPeso(0.35);
                $p->setIdade(1);
                $p->setMembros(0);
                print_r($p);
                $p->locomover();
                $p->alimentar();
                $p->emitirSom();
                $p->soltarBolha();
                echo '<hr>';

                $a->setCorPena("amarela");
                $a->setPeso(0.89);
                $a->setIdade(2);
                $a->setMembros(2);
                print_r($a);
                $a->locomover();
                $a->alimentar();
                $a->emitirSom();
                $a->fazerNinho();
                echo '</div>';
                echo '<hr>';

                echo "<div style='background-color: chocolate'>";
                $m2->setPeso(5.70);
                $m2->setIdade(8);
                $m2->setMembros(4);
                print_r($m2);
                $m2->locomover();
                $m2->alimentar();
                $m2->emitirSom();
                echo '<hr>';

                $c->setPeso(55.30);
                $c->setIdade(3);
                $c->setMembros(4);
                print_r($c);
                $c->locomover();
                $c->alimentar();
                $c->emitirSom();
                $c->usarBolsa();
                echo '<hr>';

                $k->setPeso(3.94);
                $k->setIdade(5);
                $k->setMembros(4);
                print_r($k);
                $k->locomover();
                $k->alimentar();
                $k->emitirSom();
                $k->abanarRabo();
                echo '</div>';


            ?>
        </pre>
    </body>
</html>