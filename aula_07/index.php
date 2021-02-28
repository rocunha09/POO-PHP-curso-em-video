<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Exercício prático POO</title>
    </head>
    <body>
        <h4>Livros e leitores:</h4>
        <pre>
            <?php
                require_once 'Livro.php';
                require_once 'Pessoa.php';

                $p[0] = new Pessoa("Pedro", 22, "M");
                $p[1] = new Pessoa("Maria", 31, "F");

                $s[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
                $s[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
                $s[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);

                $s[0]->abrir();
                $s[0]->folhear(50);
                $s[0]->avancarPag();
                $s[0]->fechar();
                $s[0]->avancarPag();
                $s[0]->detalhes();
                echo '<hr>';
                $s[1]->detalhes();
            ?>
        </pre>
    </body>
</html>