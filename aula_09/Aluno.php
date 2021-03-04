<?php
require_once 'Pessoa.php';

//caso a classe tivesse: final class Aluno extends Pessoa {  \\ela não poderia ter subclasses
class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    public function cancelarMatricula(){
        echo "<p> a matrícula do aluno {$this->getNome()} foi cancelada</p>";
    }

    //caso o método tivesse: public final function pagarMensalidade(){ \\então ele não poderia ser sobreposto
    public function pagarMensalidade(){
        echo "<p>pagando mensalidade de {$this->getNome()}</p>";
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }



}