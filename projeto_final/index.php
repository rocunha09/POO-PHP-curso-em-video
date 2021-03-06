<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Projeto final</title>
    </head>
    <body>
    <h4>Projeto final:</h4>
        <pre>
            <?php
                require_once 'Video.php';
                require_once 'Gafanhoto.php';
                require_once 'Visualizacao.php';

                $v[0] = new Video("Aula 1 de POO");
                $v[1] = new Video("Aula 12 de PHP");
                $v[2] = new Video("Aula 15 de HTML5");

                $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
                $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

                $vis[0] = new Visualizacao($g[0], $v[2]);
                $vis[0]->avaliar();
                $vis[1] = new Visualizacao($g[0], $v[1]);
                $vis[1]->avaliarPorcent(60);
                print_r($vis);


            ?>
        </pre>
    </body>
</html>