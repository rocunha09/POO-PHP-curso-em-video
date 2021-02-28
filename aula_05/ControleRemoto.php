<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

    function __construct(){
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    public function ligar(){
        $this->setLigado(true);
        $this->setTocando(true);
        $this->setVolume(50);
    }

    public function desligar(){
        $this->setLigado(false);
        $this->setTocando(false);
        $this->setVolume(0);
    }

    public function abrirMenu(){
        echo '<br>----------MENU----------';
        echo "<p>está ligado?" . ($this->getLigado() ? " SIM</p>": " NÃO</p>");
        echo "<p>está tocando?" . ($this->getVolume() ? " SIM</p>": " NÃO</p>");
        echo "<p>volume: {$this->getVolume()}";

        for ($i = 0; $i < $this->getVolume(); $i+= 10){
            echo " ▐";
        }
        echo "</p>";
        echo '------------------------';
    }

    public function fecharMenu(){
        echo "<p>Fechando menu...</p>";
    }

    public function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 10);
        } else {
            'Desligado! volume = 0;';
        }
    }

    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 10);
        }

    }

    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() != 0){
            $this->setVolume(0);
        }
    }

    public function desligarMudo(){
        if($this->getLigado()){
            $this->setVolume(50);
        }
    }

    public function play(){
        if($this->getLigado() && $this->getTocando(false)){
            $this->setTocando(true);
        }

    }

    public function pause(){
        if($this->getLigado() && $this->getTocando(true)){
            $this->setTocando(false);
        }
    }

    private function getVolume(){
        return $this->volume;
    }

    private function setVolume($v){
        return $this->volume = $v;
    }

    private function getLigado(){
        return $this->ligado;
    }

    private function setLigado($l){
        return $this->ligado = $l;
    }

    private function getTocando(){
        return $this->tocando;
    }

    private function setTocando($t){
        return $this->tocando = $t;
    }
}