<?php


class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function __constructor($desafiado, $desafiante){
            $this->getDesafiado($desafiado);
            $this->getDesafiante($desafiante);
    }

    public function marcarLuta(){

    }

    public function Lutar(){

    }

    public function getDesafiado(){
        return $this->desafiado;
    }

    public function setDesafiado($d){
        return $this->desafiado = $d;
    }

    public function getDesafiante(){
        return $this->desafiante;
    }

    public function setDesafiante($d){
        return $this->desafiante = $d;
    }

    public function getRounds(){
        return $this->rounds;
    }

    public function setRounds($r){
        return $this->rounds = $r;
    }

    public function getAprovada(){
        return $this->aprovada;
    }

    public function setAprovada($a){
        return $this->aprovada = $a;
    }
}