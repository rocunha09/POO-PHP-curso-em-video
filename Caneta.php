<?php


class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
        if ($this->tampada == false) {
            echo "<p>estou rabiscando...</p>";
        } else {
            echo "<p>erro, caneta está tampada! destampe para rabiscar...</p>";
        }

    }

    function tampar(){
        $this->tampada = true;
        echo "<p>tampando caneta...</p>";

    }
    function destampar(){
        $this->tampada = false;
        echo "<p>destampando caneta...</p>";
    }

}