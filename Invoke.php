<?php
require_once "data/Student.php";
use data\Student;

$student1 = new Student();
$student1->id = "1";
$student1->nama = "Eko";
$student1->value = 100;

// ketika kita membuat $var() ini seperti fuction variable kita sebenarnya memanggila function __invoke yang ada di dalam object
$student1(2, "Budi", 100);