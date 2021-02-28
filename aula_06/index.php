<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Relacionamento entre classes</title>
    </head>
    <body>
    <h4>Ultra Emoji Combat:</h4>
    <pre>
    <?php
        require_once 'Lutador.php';
        $l = array();
        $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9);
        $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8);
        $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9);
        $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6);
        $l[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3);
        $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7);

        for($i = 0; $i < count($l)-1; $i++){
            $l[$i]->status();
        }


    ?>
    </pre>
    </body>
</html>