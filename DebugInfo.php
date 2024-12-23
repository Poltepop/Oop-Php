<?php

require_once "data/Student.php";
use data\Student;

$student1 = new Student();
$student1->id = "1";
$student1->nama = "Eko";
$student1->value = 100;
$student1->getSample("xxx");

//ketika mnggunakan debuginfo maka kita mengoverride var_dump() fungsi nya agar kita dapat melihat/mengatur informasi secara detail dalam proses debigging
//hati2 ktika menggunakan function __debuginfo() ketika propertises belum di  initialization/tidak memiliki value maka akan terjadi error 
var_dump($student1);