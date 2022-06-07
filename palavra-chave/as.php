<?php 
$lista = [1, 2, 3, 4];

foreach($lista as $item) {
    echo $item;
    echo "<br>";
}

// outro exemplo
$pessoa = [
    "Peter" => "35",
    "Bob" => "37",
    "Bonny" => "39"
];

foreach ($pessoa as $personalidade => $idade) {
    # code...
    echo "$personalidade tem $idade anos de idade";

    echo "<br";
}

trait mensagem1 {
    public function msg1() {
        echo "Sim é divertido!";
    }
}
class bemVindo {
    use mensagem1 {
        mensagem1::msg1 as msg;
    }
}
$obj = new bemVindo();
$obj->msg();
?>