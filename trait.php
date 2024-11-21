<?php
    require_once "data/SayGoodBye.php";

    use Data\traits\{Person,SayGoodBye,SayHello};

    $person = new Person();
    $person->Hello("");
    $person->GoodBye("eko");

    $person->name = "joko";
    var_dump($person);
    $person->age;

?>