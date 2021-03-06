<?php
require_once 'Lobo.php';

class Cachorro extends Lobo{

    public function emitirSom(){
        echo '<p>Au Au Au</p>';
    }
//php não possui nativamente suporte para sobrecarga de métodos,
//portando o ideal é trabalhar com assinaturas parecidas.

    public function reagirFrase($frase){
        if($frase == "toma comida" || $frase == "ola"){
            echo '<p>Abanando o rabo e latindo</p>';

        } else {
            echo '<p>Rosnando</p>';
        }

    }

    public function reagirHora($hora, $minuto){
        if($hora < 12){
            echo '<p>Abanando o rabo</p>';

        }elseif($hora>=18){
            echo '<p>Ignorando</p>';

        }else{
            echo '<p>Abanando e latindo</p>';

        }
    }

    public function reagirDono($dono){
        if($dono == true){
            echo '<p>Abanando</p>';
        } else {
            echo '<p>Rosnando e latindo</p>';
        }
    }

    public function reagirIdade($idade, $peso){
        if($idade < 5){
            if($peso < 10){
                echo '<p>"Abanando o rabo"</p>';

            }else{
                echo '<p>Latindo</p>';
            }
        }else{
            if($peso < 10){
                echo '<p>Rosnando</p>';

            }else{
                echo '<p>Ignorando</p>';

            }
        }
    }

}