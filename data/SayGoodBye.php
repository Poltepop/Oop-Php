<?php
namespace Data\traits;

trait SayGoodBye{

    public int $age = 10;

    public function GoodBye(?string $name): void
    {
        if(is_null($name)){
            echo "Good Bye " . PHP_EOL;
        }else{
            echo "Good Bye $name" .PHP_EOL;
        }
    }
}

trait SayHello{

    public int $age = 10;

    public function Hello(?string $name): void
    {
        if(is_null($name)){
            echo "Hello!! " . PHP_EOL;
        }else{
            echo "Hello $name" .PHP_EOL;
        }
    }
}

class Person{
    use SayHello,SayGoodBye;
}
?>