<?php

use data\Student;

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->nama = "eko";
$student1->value = 100;
$student1->getSample("xxx");

var_dump($student1);
//clone
$student2 = clone $student1;
var_dump($student2);
?>