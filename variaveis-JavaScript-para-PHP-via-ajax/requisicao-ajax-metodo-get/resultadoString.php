<?php

// recebe os valores da requisição GET
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$sobrenome = filter_input(INPUT_GET, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);

if ($nome && $sobrenome) {
    # code...
    echo "<br/></br>";
    echo "Meu nome é: ".$nome;
    echo "<br/></br>";
    echo "Meu sobrenome é: ".$sobrenome;
}