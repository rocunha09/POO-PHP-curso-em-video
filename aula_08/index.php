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
                require_once 'Funcionario.php';

                $p[1] = new Pessoa();
                $p[2] = new Aluno();
                $p[3] = new Professor();
                $p[4] = new Visitante();

                $p[1]->setNome("Pedro");
                $p[2]->setNome("Maria");
                $p[3]->setNome("Claudio");
                $p[4]->setNome("Fabiana");

                $p[2]->setCurso("Informática");
                $p[3]->setSalario(2500.75);
                $p[3]->receberAumento(500);
                $p[4]->setSetor("Estoque");

                print_r($p[1]);
                print_r($p[2]);
                print_r($p[3]);
                print_r($p[4]);

                //$p[1]->receberAumento(550.20);
                //$p[2]->mudarTrabalho("");
                //$p[4]->cancelarMatricula();




            ?>
        </pre>
    </body>
</html>