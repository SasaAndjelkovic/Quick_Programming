<?php

class Database{
    static public $number = 0;
    function __construct(){
      
        self::$number += 10;
        echo "database constructor<br>";
    }
    protected function db_connect(){
        echo "from db_connect function<br>";
    }

    protected function db_read(){
        echo "from db_read function<br>";
    }

    public function db_write(){
        echo "from db_write function<br>";
    }
}

class Product extends Database{
    function __construct(){
        parent::__construct();
        self::$number += 10;
        echo "product constructor<br>";
    }
    public function new_product(){
        echo "from product class function<br>";
        //$this->db_connect();
    }
}

class User extends Product{
    function __construct(){
        parent::__construct();
        self::$number += 10;
        echo "user constructor<br>";
    }
    public function dostuff(){
        $this->db_read();
    }
}

$me = new User(); //instantiation
//$me->dostuff();
echo User::$number;
// database constructor
// product constructor
// user constructor
// 30