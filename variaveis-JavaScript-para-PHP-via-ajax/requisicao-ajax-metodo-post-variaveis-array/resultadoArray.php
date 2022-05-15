<?php 

// obtem dados (string) enviados pelo Javascript e transforma em array PHP
// transform a string de itens separados em array
$array_produtos = filter_input(INPUT_POST, 'array', FILTER_SANITIZE_SPECIAL_CHARS);
$array_produtos = explode(',', $array_produtos);

// mostra o conteúdo do array
echo '<br/>';
echo '<h2>Produtos (Array obtido do Javsscript)</h2>';
echo '<pre>';

print_r($array_produtos);

?>
<br>
<button onclick="window.location.href='./index.html'">Voltar</button>