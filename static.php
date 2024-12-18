<?php
require_once "helper/MathHelper.php";

use Helper\{MathHelper};

$mathhelper = new MathHelper();
echo $mathhelper::$name . PHP_EOL;

// dengan demikian kita bisa mengubah value ketika mengguakan keyword static 
echo $mathhelper::$name = "Eko Khannedy" . PHP_EOL;
echo $mathhelper::sum(10,10,10);