<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Pilares POO: encapsulamento - Interface</title>
    </head>
    <body>
    <h4>Controle Remoto:</h4>
    <pre>
    <?php
        require_once 'ControleRemoto.php';

        $controle = new ControleRemoto();

        $controle->ligar();
        $controle->abrirMenu();
        $controle->maisVolume();
        $controle->desligar();
        $controle->abrirMenu();
        $controle->maisVolume();
        $controle->ligar();
        $controle->maisVolume();
        $controle->maisVolume();
        $controle->maisVolume();
        $controle->abrirMenu();


    ?>
    </pre>
    </body>
</html>