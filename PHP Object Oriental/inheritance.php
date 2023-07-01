<?php

class Database{
   public function show(){
        echo "from database class<br>";
   }
}

class Product extends Database{
    public function show(){
        parent::show();
        echo "from product class<br>";
    }

    public function myfunc(){
        $this->show();
    }
}

$a = new Product();

$a->myfunc();
// from database class
// from product class

