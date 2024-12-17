<?php
interface HelloWorld {
    public function sayhello():void;
}

$helloWorld = new class implements helloWorld {
    function sayhello():void {
        echo "Hello Anonymous Function class";
    }
};

$helloWorld->sayhello();

?>