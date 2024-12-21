<?php

use data\Student;

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->nama = "Eko";
$student1->value = 100;

$student2 = clone $student1;
//operator equals pada object
var_dump($student1 == $student2);
//operator identity pada object
var_dump($student1 === $student2);
var_dump($student1===$student1);