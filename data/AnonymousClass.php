<?php
interface HelloWorld {
    public function sayhello():void;

}

$helloWorld = new class("Anonymous class") implements helloWorld {

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }



    function sayhello():void {
        echo "Hello $this->name";
    }
};

$helloWorld->sayhello();

?>