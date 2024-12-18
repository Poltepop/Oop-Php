<?php

namespace Helper;

class MathHelper{
    // ketika kita membuat keyword static maka properti yang memiliki keyword static tidak bisa di katakan sebuah objek itu sendiri 
    // kamu bisa mengunakan kata kunci "::" untuk menggunakan prooerti yang menggunakan keyword static
    //static ini mirip constatnt
    static public string $name = "Math Helper";

    static public function sum(int... $numbers):int {
        $total = 0;
        foreach($numbers as $number){
            $total += $number;
        }
        return $total;
    }
}