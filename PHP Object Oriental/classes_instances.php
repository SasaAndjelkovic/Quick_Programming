<?php

//blueprint / mold / pattern / factory for objects
class Product{
    //properties - variable
    public $price = 2;
    public $total = 0;

    //methods - function
    function calculate_total(){
        $this->total = 10 * 20;
    }

    function generate_id(){
        return rand(0,9999);
    }

    function read(){
        $this->calculate_total();
        return $this->total;
    }
}

$obj = new Product();
$number = $obj->generate_id();
echo $number;

echo "<br>";

$book = new Product();
$book->calculate_total();
echo $book->read();