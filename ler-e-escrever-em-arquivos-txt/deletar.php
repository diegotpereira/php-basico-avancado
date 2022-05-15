<?php 

// exclui arquivo tarefas.txt
if (file_exists("tarefas.txt")) {
    # code...
    unlink('tarefas.txt');
}
header('Location: index.php');