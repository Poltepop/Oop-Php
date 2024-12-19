<?php
// use yield keyword
function getGanjil(int $max) {
    for ($i = 1; $i <= $max ; $i++ ){
        if($i % 2 == 1 ){
            yield $i;
        }
    }
}

$ganjil = getGanjil(20);
foreach($ganjil as $value){
    echo "ganjil $value".PHP_EOL;
}

// iterator Manual
function getGenap(int $max){
    $hasil = [];
    for($i = 1 ; $i <= $max ; $i++){
        if($i % 2 == 0 ){
            $hasil[] = $i;
        }
    }
    return new ArrayIterator($hasil);
}

foreach(getGenap(20) as $value){
    echo "Genap $value".PHP_EOL;
}