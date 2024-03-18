<?php

    $carros = array("doblo" , "opala" , "renegate");

    foreach($carros as $car ) {
        print($car . "<br>");
    }

    echo "meu carro: $carros[0] <hr>";

    print_r($carros);
    echo "<hr>";
    var_dump($carros);

    $carros[0] = "uno";
    echo "<hr>";
    var_dump($carros);