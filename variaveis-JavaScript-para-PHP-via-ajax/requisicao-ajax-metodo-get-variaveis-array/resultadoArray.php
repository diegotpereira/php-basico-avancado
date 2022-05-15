<?php 
// obtem dados (string) enviados pelo Javascript e transforma em array PHP
// transform string de itens seperados em array 
$array_produtos = filter_input(INPUT_GET, 'array', FILTER_SANITIZE_SPECIAL_CHARS);

// retorna um array
$array_produtos = explode(',', $array_produtos);

// mostra conteúdo do array
echo '<br />';
echo '<h2>Produtos (Array obtido do Javascript)</h2>';
echo '<pre>';

print_r($array_produtos);

?>
<br/>
    <button onclick="window.location.href='./index.html'">Voltar</button>