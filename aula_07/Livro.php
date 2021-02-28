<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->setLeitor($leitor);
        $this->setAberto(false);
        $this->setPagAtual(0);
    }


    public function detalhes(){
        echo "<p>O título deste livro é: <b>{$this->getTitulo()}</b>, e foi escrito por: <b>{$this->getAutor()}</b></p>";
        if(!$this->getAberto()){
            echo"<p>Este livro possui <b>{$this->getTotPaginas()}</b> páginas, e encontra-se" . ($this->getAberto() ? " <b>aberto</b></p>": " <b>fechado</b></p>");
            echo "<p>Ninguém está lendo este livro no momento...</p>";
        } else {
            echo"<p>Este livro possui <b>{$this->getTotPaginas()}</b> páginas, e encontra-se" . ($this->getAberto() ? " <b>aberto</b> na página <b>{$this->getPagAtual()}</b></p>": " <b>fechado</b></p>");
            echo "<p>A pessoa que está lendo chama-se: <b>{$this->getLeitor()}</b></p>";
        }
    }

    public function abrir(){
        $this->setAberto(true);
    }

    public function fechar(){
        $this->setAberto(false);
    }

    public function folhear($p){
        $this->setPagAtual($p);
    }

    public function avancarPag(){
        if(!$this->getAberto()){
            echo '<p>não da pra avançar página pois o livro está fechado.</p><br>';
        } else {
            $this->setPagAtual($this->getPagAtual() + 1);
        }

    }

    public function voltarPag(){
        if(!$this->getAberto()){
            echo '<p>não da pra voltar página pois o livro está fechado.</p><br>';
        } else {
            $this->setPagAtual($this->getPagAtual() - 1);
        }

    }


    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getTotPaginas(){
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual(){
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }

    public function getAberto(){
        return $this->aberto;
    }

    public function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function getLeitor(){
        return $this->leitor;
    }

    public function setLeitor($leitor){
        $this->leitor = $leitor->getNome();
    }

}