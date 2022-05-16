<?php 

if (isset($_POST['x']) && isset($_POST['y'])) {
    # code...
    $x = addslashes($_POST['x']);
    $y = addslashes($_POST['y']);

    $resultado = Calcular($x, $y);

