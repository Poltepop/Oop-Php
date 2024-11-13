<?php
    class Product{
        private string $name;
        private int $price;
        private string $type;

        public function __construct(string $name,int $price,string $type)
        {
            $this->name = $name;
            $this->price = $price;
            $this->type = $type;
        }

        Public function getProducts(){
            echo "Name : $this->name" .PHP_EOL;
            echo "Price : $this->price" .PHP_EOL;
            echo "Type : $this->type" .PHP_EOL;
        }
    }

?>