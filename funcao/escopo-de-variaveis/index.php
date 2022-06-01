<?php 
    $num_1 = 15;

    function escopo($num_2) {

        global $num_1;

        $operacao = $num_1 + $num_2;

        return $operacao;
    }
    echo escopo(5);