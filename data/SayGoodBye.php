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

    // public string $name;

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

trait HasName{
    public string $name = "";
}

trait CanRun{
    public abstract function run(): void;
}



class ParentPerson {

    // jika kita membuat function yang sama di parent class dan di trait maka parent class akan ter override oleh trait
    public function GoodBye(?string $name)
    {
        echo "Good bye in person" . PHP_EOL;
    }

    public function Hello(?string $name)
    {
        echo "hello in person" . PHP_EOL;    
    }
}

//trait inheritance
trait all {
    // override visiblity
    use SayHello,SayGoodBye,HasName,CanRun{
        hello as public;
        Goodbye as public;
    }

    public function run(): void
    {
        echo  "Person {$this->name} is running". PHP_EOL;
    }
}

class Person extends ParentPerson{
    // override visiblity
    use all;


    // jika kita overide di child class maka trait akan ter override
    // public function GoodBye()
    // {
    //     echo "Good bye in person" . PHP_EOL;
    // }

    // public function Hello(): void
    // {
    //     echo "hello in person" . PHP_EOL;    
    // }
}
?>