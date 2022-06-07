<?php
$carros = ["Ford", "Volvo", "MBW"];

foreach ($carros as $carro) {
    # code...

    echo $carro;
    echo "<br>";

    if ($carro ==  "Volvo") {
        # code...
        break;
    }
}

$favCor = "Vermelho";

switch ($favCor) {
    case 'Amarelo':
        # code...
        echo "Minha cor favorita é Amarelo";
        break;
    case 'Azul':
        # code...
        echo "Minha cor favorita é Azul";
        break;
    case 'Verde':
        # code...
        echo "Minha cor favorita é Verde";
        break;    
    case 'Vermelho':
        # code...
        echo "Minha cor favorita é Vermelho";
        break;    
    default:
        # code...
        echo "Sua cor favorita não é vermelho, azul ou verde!";
}
?>