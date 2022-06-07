<?php
 
 class Fruta {

    public $nome;
    public $cor;

    function __construct($nome, $cor) {
        $this->nome = $nome;
        $this->cor = $cor;
    }
    function get_nome() {
        return $this->nome;
    }
    function get_cor() {
        return $this->cor;
    }
 }

 $maca = new Fruta("Maça", "Vermelha");

 echo $maca->get_nome();
 
 echo "<br>";

 echo $maca->get_cor();

?>