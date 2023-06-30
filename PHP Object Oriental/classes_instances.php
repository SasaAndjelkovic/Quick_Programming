<?php

class Database{
    public $hostname = "localhost";
    public $dbname = "mydb";
    function __construct($hostname = "localhost", $dbname = "mydb"){
 
    }
    public function __set($name, $value){
        //$this->$name = $value;
        echo "adding new properties not allowed";
    }

    public function __get($name){
        echo "the property $name does not exist";
    }
    
}

$db = new Database();

echo $db->password;