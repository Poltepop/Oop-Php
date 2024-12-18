<?php
require_once "data/Programmer.php";
use Programmer;

$array = [
    "firstname" => "Eko",
    "middlename" => "Kurniawan",
    "lastname" => "khannerdy"
];

// ini di sebuat std class guna nya mengkonversi array ke object
$object = (object) $array;
var_dump($object);
echo $object->firstname;

//kita juga bisa mengkonversi object menjadi array 
$programmer = new Programmer("Eko Khannedy");
var_dump($programmer);

$arrayProgrammer = (array)$programmer;
var_dump($arrayProgrammer);