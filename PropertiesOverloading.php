<?php

class Zero{
    private array $properties = [];

    public function __get($name)
    {
       return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);  
    }

    public function __call($name,$arguments)
    {
        $join = join(",",$arguments);
        echo "call Function $name with arguments $join" .PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",",$arguments);
        echo "call Static Function $name with arguments $join" .PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstName = "Eko";
$zero->middleName = "Khannedy";
$zero->lastName = "Kurniawan";

echo "firstName : $zero->firstName" .PHP_EOL;
echo isset($zero->firstName);

$zero->sayHell("eko","khannedy","kurniawan");
$zero::SayBinatang("Kucing","anjing","babi");


