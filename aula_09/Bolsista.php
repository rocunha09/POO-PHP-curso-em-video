<?php
    require_once 'Aluno.php';

class Bolsista extends Aluno{
    private $bolsa;

    public function renovarBolsa(){
        echo "<p>Renovando bolsa de {$this->getNome()}</p>";
    }

    public function pagarMensalidade(){
        echo "<p>pagando mensalidade com desconto de {$this->getNome()} pois ele é <b>bolsista</b></p>";
    }

    public function getBolsa(){
        return $this->bolsa;
    }

    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }


}