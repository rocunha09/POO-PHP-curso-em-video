<?php


class Conta{
    private  $dono;
    public $numConta;
    protected $tipo;
    private $saldo;
    private $status;

    public function __constructor(){
        $this->setSaldo(0);
        $this->setStatus(false);

    }

    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);

        if($this->getTipo() == "cc"){
            $this->setSaldo(50);
        } else {
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if($this->getSaldo() != 0 ){
            echo "<p>conta {$this->getNumConta()} não pode ser encerrada</p>";
            echo "<p>o saldo deve ser igual a zero (R$0)  e seu saldo é: {$this->getSaldo()}</p>";

        } else {
            $this->setStatus(false);
            echo "<p>conta {$this->getNumConta()} encerrada</p>";
        }
    }

    public function depositar($valor){
        if ($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito realizado, seu saldo atual é: {$this->getSaldo()}</p>";
        } else {
            echo '<p>Deposito não realizado, conta não existe ou encontra-se encerrada</p>';
        }
    }

    public function sacar($valor){
        if($this->getStatus() == true && $valor <= $this->getSaldo()) {
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<p>Saque no valor de {$valor} realizado seu saldo atual é: {$this->getSaldo()}</p>";

        } else {
            echo "<p>Saldo insuficiente, saque não realizado</p>";

        }

    }

    public function pagarMensal(){
        if($this->getTipo() == "cp"){
            $mensalidade = 20;
        } else {
            $mensalidade = 12;
        }

        if($this->getStatus() == true && $this->getSaldo() > $mensalidade){
            $this->setSaldo($this->getSaldo() - $mensalidade);
            echo "<p>Mensalidade paga, no valor de: {$mensalidade}</p>";
            echo "<p>saldo atual: {$this->getSaldo()}</p>";
        } else {
            echo "<p>Mensalidade não foi paga, saldo insuficiente!</p>";
            echo "<p>saldo atual: {$this->getSaldo()}</p>";
        }

    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($d){
        return $this->dono = $d;
    }

    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($n){
        return $this->numConta = $n;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($t){
        return $this->tipo = $t;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($s){
        return $this->saldo = $s;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($stat){
        return $this->status = $stat;
    }


}