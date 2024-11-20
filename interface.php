<?php
    require_once "data/Car.php";

    use Data\{Avanza,Dealer, Gtr};

    $avanza = new Avanza();
    $avanza->drive();
    echo $avanza->getTire() . PHP_EOL;
    echo $avanza->getBrand() . PHP_EOL;
    
    if($avanza->isMaintenance() == TRUE){
        echo "TRUE" .PHP_EOL;
    }else {
        echo "FALSE" .PHP_EOL;
    }

    $dealer = new Dealer();
    $dealer->car = new Gtr();
    $dealer->car->drive();
    echo $dealer->car->getTire() . PHP_EOL;
    echo $dealer->car->getBrand();


?>