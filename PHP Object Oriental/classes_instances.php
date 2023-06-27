<?php

//blueprint / mold / pattern / factory for objects
class Product{
    //properties - variable
    private $price = 2;
    public static $total = 0;

    //methods - function
    private function calculate_total(){
        $this->total = 10 * 20;
    }

    private function generate_id(){
        return rand(0,9999);
    }

    public function read(){
        $this->calculate_total();
        return $this->total;
    }
}

//$book = new Product();//instantiation
//echo $book::$total;

echo Product::$total;