<?php

class Database{
    public $hostname = "localhost";
    public $dbname = "mydb";
    function __construct($hostname = "localhost", $dbname = "mydb"){
 
    }
    public function __set($name, $value){
        /*$a = "variable";
        $$a = 1; dinamicno
        echo $variable;*/
        $this->$name = $value;
    }
    
}

$db = new Database();
//$db->name = "some name"; //ispis setting... zato sto se aktivira defoltna magic funk __set()
$db->password = "some password";

//echo $db->name;
echo $db->password;