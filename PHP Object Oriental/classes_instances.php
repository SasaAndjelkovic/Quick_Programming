<?php

//blueprint / mold / pattern / factory for objects
class Product{
   
    function __construct($var){
        echo $var;
    }
}

class Database{
    public $hostname = "";
    public $dbname = "";
    function __construct($hostname, $dbname){
    //function __construct($hostname = "default", $dbname = ""default){
        //mora u konstrakt zbog runtime
        $this->hostname = $hostname;
        $this->dbname = $dbname;

        echo "$hostname $dbname";
    }
}

$book = new Product("za konstrukt");//instantiation
$db = new Database("localhost", "mydb");
