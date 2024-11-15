<?php
    require_once "data/Programmer.php";

    $Company = new Company();
    $Company->programmer = new Programmer("eko");
    $Company->programmer->say();
    
    $Company->programmer = new BackendProgrammer("budi");
    $Company->programmer->say();
    
    $Company->programmer = new FrontendProgrammer("Joko");
    $Company->programmer->say();

    sayHello(new Programmer("eko"));
    sayHello(new BackendProgrammer("eko"));
    sayHello(new FrontendProgrammer("eko"));
    ?>