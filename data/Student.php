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

    public function __toString()
    {
        return "Student: $this->id, $this->nama, $this->value";
    }

    public function __invoke(...$arguments)
    {
        $join = join(",", $arguments);
        echo "Invove Student With Arguments $join";
    }

    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->nama,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "poltepop",
            "version" => "1.0.00"

        ];
    }
}