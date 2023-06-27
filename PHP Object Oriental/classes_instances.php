<?php

//blueprint / mold / pattern / factory for objects
class Product{
    //properties - variable
    private $price = 2;
    public static $total = 0;

    //methods - function
    private static function calculate_total(){
        //Product::$total = 10 * 20;
        self::$total = 10 * 20;
    }

    private function generate_id(){
        return rand(0,9999);
    }

    public function read(){
        //$this->calculate_total();
        self::calculate_total();
        //return Product::$total;
        return self::$total;
    }
}

$book = new Product();//instantiation
echo $book->read();

