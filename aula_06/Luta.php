<?php
    require_once 'Lutador.php';

class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2){
            $this->setAprovada(true);
            $this->setDesafiante($l1);
            $this->setDesafiado($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiante(null);
            $this->setDesafiado(null);
        }
    }

    public function lutar(){
        $l1 = $this->getDesafiante();
        $l2 = $this->getDesafiado();

        if($this->getAprovada()){
            echo '<p>Desafiante:</p>';
            $l1->apresentar();
            echo '<p>Desafiado:</p>';
            $l2->apresentar();
            $resultado = rand(0, 2);

            switch ($resultado){
                case 0:
                    echo '<p>A luta terminou em empate:</p>';
                    $l1->empatarLuta();
                    $l2->empatarLuta();
                    break;
                case 1:
                    echo '<p>Desafiado ganhou a luta:</p>';
                    $l1->perderLuta();
                    $l2->ganharLuta();
                    break;
                case 2:
                    echo '<p>Desafiante ganhou a luta:</p>';
                    $l1->ganharLuta();
                    $l2->perderLuta();
                    break;
            }

        } else {
            echo '<p>Luta não pode acontecer.</p>';
        }
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