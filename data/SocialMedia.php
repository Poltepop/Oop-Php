<?php
class SocialMedia{
    public string $name = "Mark";   
}

//ketika kita membuat final class maka class tersebut tidak bisa di warisi 
class Facebook extends SocialMedia{

    public function Owner():void {
        echo "pemilik Facebook adalah $this->name" .PHP_EOL;
    }

    final public function login(string $username, string $password):bool{
        return true;
    }
}

class FakeFacebook extends Facebook {
    // public function login(string $username, string $password):bool{
    //     return true;
    // }
    // kita tidak bisa meng override fnal function di child class 
}
//erorr
// class FakeFacebook extends Facebook{ 

// }

?>