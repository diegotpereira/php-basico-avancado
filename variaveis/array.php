<?php 
    $meuArray = ["aprender", "php", "básico"];

    var_dump($meuArray);

    echo "<br>"; //Quebra de linha

    // Acessando dados únicos
    echo $meuArray[0];

    echo " ";

    echo $meuArray[1];

    echo " ";

    echo $meuArray[2];
    echo " ";

    echo "<br>"; //Quebra de linha


    // Array com chaves
    $meuArray = [
        "acao" => "aprender",
        "linguagem" => "php",
        "nivel" => "básico"
    ];

    echo $meuArray["acao"];
    echo " ";
    echo $meuArray["linguagem"];
    echo " ";
    echo $meuArray["nivel"];
    echo " ";

    echo "<br>"; //Quebra de linha

    // Array multidimensionais(Matriz)
    $minhaMatriz = [
        [10, 30],
        ["Diego", "Pereira"],
        ["githubcom", "/diegotpereira"]
    ];

    echo "<br>"; //Quebra de linha
    
    //acessando valor 30
    echo $minhaMatriz[0][1];