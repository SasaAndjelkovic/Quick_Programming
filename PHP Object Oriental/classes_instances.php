<?php

class Database{
    public $hostname = "localhost";
    public $dbname = "mydb";
    function __construct($hostname = "localhost", $dbname = "mydb"){
 
    }
    
}

$db = new Database();
$db->name = "some name";

print_r($db);
//Database Object ( [hostname] => localhost [dbname] => mydb [name] => some name )
echo $db->name;