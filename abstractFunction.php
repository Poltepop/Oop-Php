<?php
    require_once "data/Animal.php";

    use Data\{Animal,Cat,Dog};

    $cat = new Cat();
    $cat->name = "jimmy";
    $cat->run();

?>