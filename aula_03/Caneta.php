<?php
class Caneta
{
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    //outra forma de declarar o construtor é com o próprio nome da classe ex: Caneta(){...}

    public function __construct($modelo, $cor, $ponta){
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->tampar();
    }

    public function tampar(){
        $this->setTampada(true);
    }

    public function destampar(){
        $this->setTampada(false);
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($ponta){
        $this->ponta = $ponta;
    }

    public function getTampada(){
        return $this->tampada;
    }

    public function setTampada($tampada){
        $this->tampada = $tampada;
    }




}