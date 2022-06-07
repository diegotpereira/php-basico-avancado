<?php 
    $jsonObj = '{"Peter": 36, "Bob": 37, "Bunny": 43}';

    $obj = json_decode($jsonObj);

    echo $obj->Peter;
    echo $obj->Bob;
    echo $obj->Bunny;