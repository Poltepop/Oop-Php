<?php

class Data implements IteratorAggregate{
    // ini di sebut object iteration kita hanya bisa mengiterasi objek yang memiliki properties public saja protected dan private tidak termasuk
    var string $first = "Pertama";
    public string $second = "Kedua";
    protected string $third = "ketiga";
    private string $forth = "keempat";

    //use yield operator 
    public function yieldTest(){
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
    }


    // use array iterator
    public function getIterator(): Traversable
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth
        ];

        return new ArrayIterator($array);
    }
}

$data = new Data();
foreach ($data->yieldTest() as $property => $value){
    echo "$property : $value" .PHP_EOL;
}

foreach($data->getIterator() as $property => $value){
    echo "$property : $value" .PHP_EOL;
}