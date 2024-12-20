<?php

namespace data;

class Student{
    public string $id;
    public string $nama;
    public int $value;
    private string $sample;

    public function getSample(string $sample){
        $this->sample = $sample;
    }

    // kita bisa menggunakan function __clone() untuk membatasi object clone/menyaring onject yang kita ingin kan
    public function __clone()
    {
        unset($this->sample);
    }
}