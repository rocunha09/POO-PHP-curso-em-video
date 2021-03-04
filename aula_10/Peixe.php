<?php
require_once 'Animal.php';

class Peixe extends Animal{
    private $corEscama;

    public function soltarBolha(){
        echo '<p>Peixa soltando bolhas</p>';
    }

    public function getCorEscama(){
        return $this->corEscama;
    }

    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }

    public function locomover(){
        echo '<p>Nadando</p>';
    }

    public function alimentar(){
        echo '<p>Comendo Substâncias</p>';
    }

    public function emitirSom(){
        echo '<p>Peixa não faz som</p>';
    }

}