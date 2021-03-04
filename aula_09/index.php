<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>pilares POO: herança</title>
    </head>
    <body>
        <h4>Herança:</h4>
        <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Aluno.php';
                require_once 'Professor.php';
                require_once 'Visitante.php';
                require_once 'Bolsista.php';
                require_once 'Tecnico.php';

                $v = new Visitante();
                $a = new Aluno();
                $b = new Bolsista();

                $v->setNome("Juvenal");
                $v->setIdade(33);
                $v->setSexo("M");

                $a->setNome("Pedro");
                $a->setMatricula(1234);
                $a->setIdade(16);
                $a->setSexo("M");
                $a->setCurso("Informática");
                $a->pagarMensalidade();

                $b->setNome("Jubileu");
                $b->setMatricula(2345);
                $b->setIdade(17);
                $b->setBolsa(12.5);
                $b->setCurso("Administração");
                $b->setSexo("M");
                $b->pagarMensalidade();
                $b->renovarBolsa();

                echo '<hr>';
                print_r($v);
                print_r($a);
                print_r($b);

            ?>
        </pre>
    </body>
</html>