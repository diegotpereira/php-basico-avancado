<?php
$x = 5;

function add($y) {
    global $x;

    return $x + $y;
}

echo "$x + 5 é " . add(5);

?>