<?php
class SocialMedia{
    public string $name = "Mark";   
}

//ketika kita membuat final class maka class tersebut tidak bisa di warisi 
final class Facebook extends SocialMedia{

    public function Owner():void {
        echo "pemilik Facebook adalah $this->name" .PHP_EOL;
    }
}
//erorr
// class FakeFacebook extends Facebook{ 

// }

?>