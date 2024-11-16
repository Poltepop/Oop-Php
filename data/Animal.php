<?php

namespace Data {
    abstract class Animal{
        public string $name;

        // Saat Membuat Abstract Function Kita Tidak Boleh Membuat Block Function Untuk Function Tersebut
        // Abstract Function Wajib di Override di Class Child 
        //Abstract Functioin Tidak Boleh Memiliki Access Modifer Private Karena Ketika Private Child Class tidak bisa Akses
        abstract public function run(): void;
    }
    
    class Cat extends Animal {
        public function run(): void {
            echo  "Cat $this->name is running" .PHP_EOL;
        }
    }
    class Dog extends Animal {
        public function run(): void {
            echo  "Dog $this->name is running" .PHP_EOL;
        }
    }
}