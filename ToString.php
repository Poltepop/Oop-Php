<?php

require_once "data/Student.php";
use data\Student;

$student1 = new Student();
$student1->id = "1";
$student1->nama = "Eko";
$student1->value = 100;

//jika kita megkonversi menjadi sebuah string maka sebenarnya kita memanggil function __toString() 
$string = (string) $student1;
echo $string;

//alternative
echo $student1;