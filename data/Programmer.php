<?php
    class Programmer{
        public string $name;
        public int $age;

        public function __construct(string $name, int $age = 20)
        {
            $this->name = $name;
            $this->age = $age;
        }

        function say(){
            echo "Hallo $this->name" . PHP_EOL;
        }
    }

    class BackendProgrammer extends Programmer{

    }
    
    class FrontendProgrammer extends Programmer{

    }

    class Company {
        public Programmer $programmer;
    }

    function sayHello(Programmer $programmer){
        echo "hello Programmer $programmer->name" .PHP_EOL;
        echo "$programmer->age y.o" .PHP_EOL;
    }
?>