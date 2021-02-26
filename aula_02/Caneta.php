<?php


class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){
        if ($this->tampada == false) {
            echo "<p>estou rabiscando...</p>";
        } else {
            echo "<p>erro, caneta está tampada! destampe para rabiscar...</p>";
        }

    }

    public function tampar(){
        $this->tampada = true;
        echo "<p>tampando caneta...</p>";

    }
    public function destampar(){
        $this->tampada = false;
        echo "<p>destampando caneta...</p>";
    }

}