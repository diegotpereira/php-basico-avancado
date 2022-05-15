<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulário - Listas de Tarefas</h1>
    <form method="POST" action="receber.php">
        <input type="text" name="tarefa" id="" placeholder="Digite uma atividade">
        <input type="submit" value="Enviar">
    </form>
    <?php include('tarefa.php') ?>
    <!--deleta o arquivo tarefas.txt -->
    <button onclick="window.location.href = 'deletar.php'">Excluir Lista</button>
</body>

</html>