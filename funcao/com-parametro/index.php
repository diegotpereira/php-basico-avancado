<?php 
    function numeroAoQuadrado($numero) {
        echo $numero * $numero;

        echo "<br>";
    }

    // Aqui eu vou receber o quadrado de 10
    numeroAoQuadrado(10);

    // aqui o quadrado de 2
    numeroAoQuadrado(2);

    function soma ($num_1, $num_2) {
        $total = $num_1 + $num_2;

        return $total;
    }
    echo soma(5,3);

    // Parâmetros da função por referência
    // Para que o parâmetro definido receba a referência é necessário inserir o &
    function referencia(&$num_1) {
        $num_1 *= 5;

        // retorna valor de $num_1 * 5
        return $num_1;
    }
    $num_2 = 3;

    // executando
    referencia($num_2);
    echo "$num_2 <br>";

    // Parâmetros da função por valor padrão
    function passagem_padrado($num_1 =15) {
        return $num_1;
    }

    // será impresso o retorno da função - 15
    echo passagem_padrado();