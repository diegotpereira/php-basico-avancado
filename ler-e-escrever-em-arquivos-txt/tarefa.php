<?php 
// pega dados do arquivo tarefas.txt e coloca na tela
if(file_exists("tarefas.txt")) {
    $lista = file_get_contents("tarefas.txt");
    $lista_array = explode("\n", $lista);

    foreach ($lista_array as $lista_item) {
        # code...
        echo $lista_item.'<br />';
    }
} else {
    $lista = null;
}
?>