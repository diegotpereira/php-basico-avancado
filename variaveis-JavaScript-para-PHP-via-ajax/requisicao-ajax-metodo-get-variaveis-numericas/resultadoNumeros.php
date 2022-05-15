<?php

// obter dados enviados pelo javascript
$largura =  filter_input(INPUT_GET, 'largura', FILTER_SANITIZE_SPECIAL_CHARS);
$divisor = filter_input(INPUT_GET, 'divisor', FILTER_SANITIZE_SPECIAL_CHARS);

echo '<h2>Dados obtidos do JAVASCRIPT</h2>';

if ($largura && $divisor) {
    # code...
    echo 'Largura da página: '.$largura.' pixels | tipo de dados = '.gettype($largura);
    echo '<br/><br/>';
    echo 'Divisor: '.$divisor.' | tipo de dados = '.gettype($divisor);

    //transformando string números
    echo '<h2>Corrigindo dados no PHP</h2>';

    $largura = (int)$largura;
    $divisor = (float)$divisor;

    echo 'Largura da página: '.$largura.' pixels | tipo de dados = '.gettype($largura);
    echo '<br/></br>';
    echo 'Divisor: '.$divisor.' | tipo de dados = '.gettype($divisor);
    echo '<h2>Largura multiplicado pelo divisor (duas casas decimais)</h2>';

    if ($largura <> 0 && $divisor <>0) {
        # code...
        echo 'Largura da página divido por 4 = '.number_format($largura*$divisor, 2,',','.');
    }
}