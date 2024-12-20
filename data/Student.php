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
}