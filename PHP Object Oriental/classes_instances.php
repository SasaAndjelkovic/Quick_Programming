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
        $arr = array();
        $arr['id'] = '1';
        $arr['name'] = 'john';
        $arr['age'] = '24';
        $arr['gender'] = 'male';

        return $arr[$name];
    }   
}

$db = new Database();

echo $db->gender;