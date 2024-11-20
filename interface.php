<?php
    require_once "data/Car.php";

    use Data\{Avanza,Dealer, Gtr};

    $avanza = new Avanza();
    $avanza->drive();
    echo $avanza->getTire() . PHP_EOL;

    $dealer = new Dealer();
    $dealer->car = new Gtr();
    $dealer->car->drive();
    echo $dealer->car->getTire();


?>