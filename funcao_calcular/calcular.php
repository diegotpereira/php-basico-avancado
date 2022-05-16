<?php

    function Calcular($x, $y)
    {
        $dados = array(
            'soma' => '',
            'subtracao' => '',
            'multiplicacao' => '',
            'divisao' => '',
            'exponenciacao' => ''
        );
        $dados['soma'] = $x + $y;
        $dados['subtracao'] = $x - $y;
        $dados['multiplicacao'] =  $x * $y;

        if ($y == 0) {
            # code...
            $dados['divisao'] = 'Impossibilidade';
        } else {
            $dados['divisao'] = $x / $y;
        }
        $dados['exponenciacao'] = pow($x, $y);

        return $dados;
    }
?>