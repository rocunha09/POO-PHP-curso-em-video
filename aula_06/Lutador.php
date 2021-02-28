<?php


class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    public function apresentar(){
        echo '<h4>Apresentando:</h4>';
        echo "<p>Lutador: {$this->getNome()}.</p>";
        echo "<p>Origem: {$this->getNacionalidade()}.</p>";
        echo "<p>Idade: {$this->getIdade()}.</p>";
        echo "<p>Altura: {$this->getAltura()}.</p>";
        echo "<p>Pesando: {$this->getPeso()}Kg.</p>";
        echo "<p>Ganhou: {$this->getVitorias()} Lutas.</p>";
        echo "<p>Perdeu: {$this->getDerrotas()} Lutas.</p>";
        echo "<p>Empatou: {$this->getEmpates()} Lutas.</p>";
        echo '<p>----------------------------------</p>';
    }

    public function status(){
        echo '<h5>Status:</h5>';
        echo "<p>Lutador: {$this->getNome()}.</p>";
        echo "<p>Pesando: {$this->getPeso()}Kg.</p>";
        echo "<p>Lutando na categoria: {$this->getCategoria()}.</p>";
        echo "<p>Ganhou: {$this->getVitorias()} Lutas.</p>";
        echo "<p>Perdeu: {$this->getDerrotas()} Lutas.</p>";
        echo "<p>Empatou: {$this->getEmpates()} Lutas.</p>";
        echo '<p>----------------------------------</p>';
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($no){
        return $this->nome = $no;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function setNacionalidade($na){
        return $this->nacionalidade = $na;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($i){
        return $this->idade = $i;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($alt){
        return $this->altura = $alt;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($p){
        $this->peso = $p;
        $this->setCategoria();
    }

    public function getCategoria(){
        return $this->categoria;
    }

    private function setCategoria(){
        if($this->getPeso() < 52.2){
            $this->categoria = "Inválido";
        } elseif($this->getPeso() <= 70.3){
            $this->categoria = "Leve";
        } elseif($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
        } elseif($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function setVitorias($v){
        return $this->vitorias = $v;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function setDerrotas($d){
        return $this->derrotas = $d;
    }

    public function getEmpates(){
        return $this->empates;
    }

    public function setEmpates($emp){
        return $this->empates = $emp;
    }
}