<?php

//blueprint / mold / pattern / factory for objects
class Product{
    //properties - variable
    public $price = 2;

    //methods - function
    function calculate_total(){
        echo "from the function";
    }
}

$book = new Product(); //instantiation
echo "book " . $book->price;
echo "<br>";
$book->price = 10;
echo "book " . $book->price;
echo "<br>";
$book->calculate_total();
echo "<br>";

$phone = new Product();
echo "phone " . $phone->price;