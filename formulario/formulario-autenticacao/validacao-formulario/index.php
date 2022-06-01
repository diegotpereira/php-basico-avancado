<?php 
    // Defina uma variável e defina-a como nula por padrão
    $nome = $email = $genero = $comentario = $website =  "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = testar_entrada($_POST["nome"]);
        $email = testar_entrada($_POST["email"]);
        $genero = testar_entrada($_POST["genero"]);
        $comentario = testar_entrada($_POST["comentario"]);
        $genero = testar_entrada($_POST["genero"]);
    }

    function testar_entrada($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    echo "Bem vindo: ", $nome;
    echo $email;
    echo $genero;
    echo $comentario;
    echo $genero;

?>